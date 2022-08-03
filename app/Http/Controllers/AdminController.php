<?php

namespace App\Http\Controllers;

use App\Models\CalendarModel;
use App\Models\CampaignModel;
use http\Env\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use SimpleCSV;
use SimpleXLS;
use SimpleXLSX;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VoiceGrant;
use Twilio\Rest\Client;
use Twilio\TwiML\VoiceResponse;


class AdminController extends Controller
{
    function print_me($data){
        print "<pre>";
        print_r($data);
        print "</pre>";
    }

    function index(Request $request) {
        return redirect('/admin/home');
    }


//  Super Admin Start

    function super_customer(Request $request) {
        $user_model = new UserModel();
        $users = $user_model->get_users(array('role'=>'admin'));
        return view('/super_admin/customer')->with(array('users'=>$users));
    }

    function add_admin(Request $request){
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_name' => 'required',
                'password' => 'required',
                're_password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
            ]);
            if ($validated) {
                $data['role'] = 'admin';
                $data['user_name'] = $request->input('user_name');
                $data['first_name'] = $request->input('first_name');
                $data['last_name'] = $request->input('last_name');
                $data['email'] = $request->input('email');
                $data['password'] = Hash::make($request->input('password'));
                $data['date_created'] = date('Y-m-d h:i:s', time());

                $user_name = $user_model->get_user(array('user_name'=>$request->input('user_name')));
                if (isset($user_name))
                    return response('UserNameAlreadyExist');

                $email = $user_model->get_user(array('email'=>$request->input('email')));
                if (isset($email))
                    return response('EmailAlreadyExist');

                if ($request->input('password') != $request->input('re_password'))
                    return response('PasswordMismatch');

                if ($user_model->create_user($data)){
                    return response('RegisterSuccessful');
                }
                else
                    return response('RegistrationFailed');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function get_admin(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $user_model = new UserModel();
        $data = $user_model->get_user(array('role'=>'admin', 'user_id'=>$id));
        return response()->json($data);
    }

    function delete_admin(Request $request, $id) {
        $user_model = new UserModel();
        if ($user_model->delete_user(array('role'=>'admin', 'user_id'=>$id)))
            return response('DeletedSuccessfully');
        else
            return response('NotDeleted');
    }

    function change_admin_image(Request $request) {
        $user_model = new UserModel();
        if ($request->post()) {
            $user = $user_model->get_user(array('role'=>'admin', 'user_id'=>$request->input('user_id')));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                if ($file->isValid()){
                    $file_name = date('Y_m_d_H_i_s').'_'.$file->getClientOriginalName();
                    if ($user_model->change_user(array('user_id'=>$user->user_id, 'image'=>$file->storeAs('account', $file_name, 'assets')))){
                        if ($user->image !== null)
                            Storage::disk('assets')->delete($user->image);
                        return response('UpdateSuccessfully');
                    }
                    else
                        return response('NotUpdated');
                }
                else
                    return response('InvalidImage');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function change_admin_email(Request $request) {
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_id' => 'required',
                'email' => 'required',
            ]);
            if ($validated) {
                if ($user_model->change_user(array('user_id'=>$request->input('user_id'), 'email'=>$request->input('email'), 'role'=>'admin'))){
                    return response('UpdateSuccessfully');
                }
                else
                    return response('NotUpdated');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function change_admin_password(Request $request) {
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_id' => 'required',
                'new_password' => 'required',
                're_password' => 'required',
            ]);
            if ($validated) {
                if ($request->input('new_password') == $request->input('re_password')){
                    $data['user_id'] = $request->input('user_id');
                    $data['password'] = Hash::make($request->input('new_password'));
                    if ($user_model->change_user($data))
                        return response('UpdateSuccessfully');
                    else
                        return response('NotUpdated');
                }
                return response('PasswordMismatch');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

//  Super Admin End

//  Admin Start

    function admin_dashboard(Request $request) {
        $campaign_model = new CampaignModel();
        $campaigns = $campaign_model->get_campaigns(array('user_name'=>$request->session()->get('user_name')));
        return view('/admin/dashboard')->with(array('campaigns'=>$campaigns));
    }

    function calendar(Request $request) {
        if ($request->exists('per_page') && $request->get('per_page') != '')
            $per_page = $request->get('per_page');
        else
            $per_page = 5;
        $data = array();
        $user_model = new UserModel();
        $data['agents'] = $user_model->get_users(array('admin'=>$request->session()->get('user_name'), 'role'=>'agent'));
        if ($request->exists('search') && $request->get('search') != '')
            $calendar = CalendarModel::where('activity', '=', $request->get('search'));
        else
            $calendar = DB::table('calendar');
        $calendar = $calendar->paginate($per_page);
        return view('/admin/calendar', ['calendars' => $calendar])->with($data);
    }

    function crm(Request $request) {
        return view('/admin/crm');
    }

    function pbx(Request $request) {
        return view('/admin/pbx');
    }

    function call_logs(Request $request) {
        return view('/admin/call_logs');
    }

//  Admin End

//  Admin Campaigns Start

    function campaigns(Request $request) {
        $campaigns = CampaignModel::where(array('user_name'=>$request->session()->get('user_name')));
        $campaigns = $campaigns->paginate(5);
        return view('/admin/campaigns/campaigns', ['campaigns' => $campaigns]);
    }

    function create_campaign_1(Request $request) {
        if ($request->hasFile('campaigns_document')) {
            $file = $request->file('campaigns_document');
            if ($file->isValid()){
                $file_name = date('Y_m_d_H_i_s') . '_' . $file->getClientOriginalName();
                $file_path =$file->storeAs('documents/campaigns', $file_name, 'assets');
                $document_path = public_path() . '/assets/uploads/' . $file_path;
                if ($file->getClientOriginalExtension() == 'csv'){
                    if ( $csv = SimpleCSV::import($document_path) ) {
                        $request->session()->put(array('campaign_document'=>array('path'=>$file_path, 'type'=>'csv')));
                        return response('Success');
//                        $this->print_me( $csv );
                    } else {
                        return response('ParseError');
                    }
                }
                elseif ($file->getClientMimeType() == 'application/vnd.ms-excel' && $file->getClientOriginalExtension() == 'xls'){
                    if ( $xls = SimpleXLS::parseFile($document_path) ) {
                        $request->session()->put(array('campaign_document'=>array('path'=>$file_path, 'type'=>'xls')));
                        return response('Success');
//                        $this->print_me( $xls->rows() );
                    } else {
//                        echo SimpleXLS::parseError();
                        return response('ParseError');
                    }
                }
                elseif ($file->getClientMimeType() == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' && $file->getClientOriginalExtension() == 'xlsx'){
                    if ( $xlsx = SimpleXLSX::parse($document_path)) {
                        $request->session()->put(array('campaign_document'=>array('path'=>$file_path, 'type'=>'xlsx')));
                        return response('Success');
//                        $this->print_me( $xlsx->rows() );
                    } else {
//                        echo SimpleXLSX::parseError();
                        return response('ParseError');
                    }
                }
                else
                    return response('InvalidDocument');
            }
            else
                return response('InvalidFile');
        }
        else
            return response('InvalidInput');

    }

    function create_campaign_2(Request $request) {
        $user_model = new UserModel();
        $users = $user_model->get_users(array('admin'=>$request->session()->get('user_name'), 'role'=>'manager'));
        return view('/admin/campaigns/create_campaign_2')->with(array('users'=>$users));
    }

    function create_campaign_3(Request $request) {
        $data = array();
        $data['manager'] = $request->input('manager');
        $document_path = public_path() . '/assets/uploads/' . $request->session()->get('campaign_document.path');
        if ($request->session()->get('campaign_document.type') == 'csv'){
            if ( $csv = SimpleCSV::import($document_path) ) {
                if ( sizeof($csv) > 0 )
                    $data['doc'] = $csv[0];
            }
        }
        elseif ($request->session()->get('campaign_document.type') == 'xls'){
            if ( $xls = SimpleXLS::parseFile($document_path)) {
                if ( sizeof($xls->rows()) > 0 )
                    $data['doc'] = $xls->rows()[0];
            }
        }
        elseif ($request->session()->get('campaign_document.type') == 'xlsx'){
            if ( $xlsx = SimpleXLSX::parse($document_path)) {
                if ( sizeof($xlsx->rows()) > 0 )
                    $data['doc'] = $xlsx->rows()[0];
            }
        }
        else
            return response('ParseError');

        return view('/admin/campaigns/create_campaign_3')->with($data);
    }

    function create_campaign_4(Request $request) {
        $data['vadial_fields'] = array();
        $data['your_fields'] = array();
        $data['fields'] = $request->input();
        $data['manager'] = $request->input('manager');
        unset($data['fields']['_token']);
        unset($data['fields']['manager']);

        foreach ($request->input() as $key => $value){
            if ($key != '_token' && $key != 'manager' && isset($value)){
                array_push($data['vadial_fields'], $key);
                array_push($data['your_fields'], $value);
            }
        }
        return view('/admin/campaigns/create_campaign_4')->with($data);
    }

    function create_campaign_action(Request $request) {
        $data = array();
        $campaign_model = new CampaignModel();
        $data['input'] = $request->input();
        unset($data['input']['_token']);
        unset($data['input']['manager']);

        $user_name = $request->session()->get('user_name');
        $manager = $request->input('manager');

        $document_path = public_path() . '/assets/uploads/' . $request->session()->get('campaign_document.path');
        if ($request->session()->get('campaign_document.type') == 'csv'){
            if ( $csv = SimpleCSV::import($document_path) ) {
                if ( sizeof($csv) > 0 ){
                    $data['document'] = $csv;
                }
            }
            else
                return response('ParseError');
        }
        elseif ($request->session()->get('campaign_document.type') == 'xls'){
            if ( $xls = SimpleXLS::parseFile($document_path)) {
                if ( sizeof($xls->rows()) > 0 )
                    $data['document'] = $xls->rows();
            }
            else
                return response('ParseError');
        }
        elseif ($request->session()->get('campaign_document.type') == 'xlsx'){
            if ( $xlsx = SimpleXLSX::parse($document_path)) {
                if ( sizeof($xlsx->rows()) > 0 )
                    $data['document'] = $xlsx->rows();
            }
            else
                return response('ParseError');
        }
        else
            return response('InvalidDocument');

        $new_data = array();
        for ($i=1;$i<sizeof($data['document']);$i++){
            for ($j=0;$j<sizeof($data['document'][0]);$j++){
                if(isset($data['document'][$i][$j]) && !empty($data['document'][$i][$j])){
                    foreach ($data['input'] as $vadial=>$your){
                        if ($your == $data['document'][0][$j]){
                            $new_data[$i-1]['user_name'] = $user_name;
                            $new_data[$i-1]['manager'] = $manager;
                            $new_data[$i-1][$vadial] = ($data['document'][$i][$j]);
                        }
                    }
                }
            }
        }

        if ($request->session()->has('campaign_document')){
            Storage::disk('assets')->delete($request->session()->get('campaign_document.path'));
        }

        if ($campaign_model->create_campaign($new_data))
            return response('CampaignAdded');
        else
            return response('CampaignFailed');
    }

//  Admin Campaigns End

//  Admin Account Start

    function account_managers(Request $request) {
        $user_model = new UserModel();
        $users = $user_model->get_users(array('admin'=>$request->session()->get('user_name'), 'role'=>'manager'));
        return view('/admin/account/managers')->with(array('users'=>$users));
    }

    function account_agents(Request $request) {
        $user_model = new UserModel();
        $users = $user_model->get_users(array('admin'=>$request->session()->get('user_name'), 'role'=>'agent'));
        return view('/admin/account/agents')->with(array('users'=>$users));
    }

    function account_teams(Request $request) {
        return view('/admin/account/teams');
    }

    function account_support(Request $request) {
        return view('/admin/account/support');
    }

//  Admin Account End

//  Admin Account Manage Accounts Start

    function add_account(Request $request){
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'account_type' => 'required',
                'user_name' => 'required',
                'password' => 'required',
                're_password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
            ]);
            if ($validated) {
                if ($request->input('account_type') != 'manager' && $request->input('account_type') != 'agent')
                    return response('Modified');

                $user = $user_model->get_user(array('role'=>$request->session()->get('role'), 'user_name'=>$request->session()->get('user_name'), 'email'=>$request->session()->get('email')));

                if ($request->session()->get('role') == 'admin'){
                    $data['admin'] = $request->session()->get('user_name');
                }
                elseif ($request->session()->get('role') == 'manager'){
                    $data['admin'] = $user->admin;
                    $data['manager'] = $request->session()->get('user_name');
                }
                elseif ($request->session()->get('role') == 'agent'){
                    $data['admin'] = $user->admin;
                    $data['manager'] = $user->manager;
                    $data['agent'] = $request->session()->get('user_name');
                }

                $data['role'] = $request->input('account_type');
                $data['user_name'] = $request->input('user_name');
                $data['first_name'] = $request->input('first_name');
                $data['last_name'] = $request->input('last_name');
                $data['email'] = $request->input('email');
                $data['password'] = Hash::make($request->input('password'));
                $data['date_created'] = date('Y-m-d h:i:s', time());

                $user_name = $user_model->get_user(array('user_name'=>$request->input('user_name')));
                if (isset($user_name))
                    return response('UserNameAlreadyExist');

                $email = $user_model->get_user(array('email'=>$request->input('email')));
                if (isset($email))
                    return response('EmailAlreadyExist');

                if ($request->input('password') != $request->input('re_password'))
                    return response('PasswordMismatch');

                if ($user_model->create_user($data)){
                    return response('RegisterSuccessful');
                }
                else
                    return response('RegistrationFailed');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function get_account(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $data = array();
        $user_model = new UserModel();

        if ($request->session()->get('role') == 'admin')
            $data['admin'] = $request->session()->get('user_name');
        elseif ($request->session()->get('role') == 'manager')
            $data['manager'] = $request->session()->get('user_name');
        elseif ($request->session()->get('role') == 'agent'){
            $data['agent'] = $request->session()->get('user_name');
        }

        $user = $user_model->get_user(array_merge($data, array('user_id'=>$id)));
        return response()->json($user);
    }

    function delete_account(Request $request, $id) {
        $data = array();
        $user_model = new UserModel();

        if ($request->session()->get('role') == 'admin')
            $data['admin'] = $request->session()->get('user_name');
        elseif ($request->session()->get('role') == 'manager')
            $data['manager'] = $request->session()->get('user_name');
        elseif ($request->session()->get('role') == 'agent'){
            $data['agent'] = $request->session()->get('user_name');
        }

        if ($user_model->delete_user(array_merge($data, array('user_id'=>$id))))
            return response('DeletedSuccessfully');
        else
            return response('NotDeleted');
    }

    function change_account_image(Request $request) {
        $data = array();
        $user_model = new UserModel();
        if ($request->post()) {

            if ($request->session()->get('role') == 'admin')
                $data['admin'] = $request->session()->get('user_name');
            elseif ($request->session()->get('role') == 'manager')
                $data['manager'] = $request->session()->get('user_name');
            elseif ($request->session()->get('role') == 'agent'){
                $data['agent'] = $request->session()->get('user_name');
            }

            $user = $user_model->get_user(array_merge($data, array('user_id'=>$request->input('user_id'))));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                if ($file->isValid()){
                    $file_name = date('Y_m_d_H_i_s').'_'.$file->getClientOriginalName();
                    if ($user_model->change_user(array('user_id'=>$user->user_id, 'image'=>$file->storeAs('account', $file_name, 'assets')))){
                        if ($user->image !== null)
                            Storage::disk('assets')->delete($user->image);
                        return response('UpdateSuccessfully');
                    }
                    else
                        return response('NotUpdated');
                }
                else
                    return response('InvalidImage');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function change_account_email(Request $request) {
        $data = array();
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_id' => 'required',
                'email' => 'required',
            ]);
            if ($validated) {
                if ($request->session()->get('role') == 'admin')
                    $data['admin'] = $request->session()->get('user_name');
                elseif ($request->session()->get('role') == 'manager')
                    $data['manager'] = $request->session()->get('user_name');
                elseif ($request->session()->get('role') == 'agent'){
                    $data['agent'] = $request->session()->get('user_name');
                }

                $user = $user_model->get_user(array_merge($data, array('user_id'=>$request->input('user_id'))));

                if ($user_model->change_user(array('user_id'=>$user->user_id, 'email'=>$request->input('email')))){
                    return response('UpdateSuccessfully');
                }
                else
                    return response('NotUpdated');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function change_account_password(Request $request) {
        $data = array();
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_id' => 'required',
                'new_password' => 'required',
                're_password' => 'required',
            ]);
            if ($validated) {
                if ($request->session()->get('role') == 'admin')
                    $data['admin'] = $request->session()->get('user_name');
                elseif ($request->session()->get('role') == 'manager')
                    $data['manager'] = $request->session()->get('user_name');
                elseif ($request->session()->get('role') == 'agent'){
                    $data['agent'] = $request->session()->get('user_name');
                }

                $user = $user_model->get_user(array_merge($data, array('user_id'=>$request->input('user_id'))));

                if ($request->input('new_password') == $request->input('re_password')){
                    if ($user_model->change_user(array('user_id'=>$user->user_id, 'password'=>Hash::make($request->input('new_password')))))
                        return response('UpdateSuccessfully');
                    else
                        return response('NotUpdated');
                }
                return response('PasswordMismatch');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

//  Admin Account Manage Accounts End

//  Agent Start

    function agent_home(Request $request) {
        return view('/agent/home');
    }

//  Agent End

//  Manager Start

    function manager_home(Request $request) {
        return view('/manager/home');
    }

    function manager_agents(Request $request) {
        $user_model = new UserModel();
        $data['users'] = $user_model->get_users(array('manager'=>$request->session()->get('user_name'), 'role'=>'agent'));
        return view('/manager/agents')->with($data);
    }

//  Manager End

}

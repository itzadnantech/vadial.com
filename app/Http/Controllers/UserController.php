<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    function test(Request $request){
        return view('/test/call');
//        $this->print_me($request->url());
    }

    function print_me($data){
        print "<pre>";
        print_r($data);
        print "</pre>";
    }

    function index(Request $request) {
        return redirect('/home');
    }

    function verify_user(Request $request) {
        $user_model = new UserModel();

        if ($request->exists('user_name')){
            $user = $user_model->get_user(array('user_name'=>$request->input('user_name')));
            if (isset($user))
                return response('Exist');
        }
        elseif ($request->exists('email')){
            $user = $user_model->get_user(array('email'=>$request->input('email')));
            if (isset($user))
                return response('Exist');
        }
    }

    function sign_up(Request $request) {
        return view('register');
    }

    function sign_up_action(Request $request){
        if ($request->exists('pre_plan')) {
            return view('register')->with(array('plan'=>$request->input('pre_plan')));
        }
        else {
            $user_model = new UserModel();
            if ($request->post()){
                $validated = $request->validate([
                    'user_name' => 'required|min:8|max:32',
                    'first_name' => 'required|min:8|max:32',
                    'last_name' => 'required|min:8|max:32',
                    'email' => 'required|email|min:8|max:32',
                    'password' => 'required|min:6|max:24',
                    're_password' => 'required|min:6|max:24',
                    'phone_number' => 'required|numeric|min:6|max:24',
                    'agree_term' => 'required',
                ]);
                if ($validated) {
                    $data['role'] = 'admin';
                    $data['user_name'] = $request->input('user_name');
                    $data['first_name'] = $request->input('first_name');
                    $data['last_name'] = $request->input('last_name');
                    $data['email'] = $request->input('email');
                    $data['address'] = $request->input('address');
                    $data['company'] = $request->input('company');
                    $data['phone_number'] = $request->input('phone_number');
                    $data['plan'] = $request->input('plan');
                    $data['optional'] = $request->input('optional');
                    $data['password'] = Hash::make($request->input('password'));
                    $data['date_created'] = date('Y-m-d h:i:s', time());

                    if ($request->input('password') != $request->input('re_password'))
                        return response(array('response'=>'PasswordMismatch'));

                    if ($request->exists('user_id')){
                        $data['user_id'] = $request->input('user_id');
                        if ($user_model->change_user($data)) {
                            return response(array('response'=>'RegisterSuccessful'));
                        }
                        else
                            return response(array('response'=>'RegistrationFailed'));
                    }
                    else {
                        $user_name = $user_model->get_user(array('user_name'=>$request->input('user_name')));
                        if (isset($user_name))
                            return response(array('response'=>'UserNameAlreadyExist'));

                        $email = $user_model->get_user(array('email'=>$request->input('email')));
                        if (isset($email))
                            return response(array('response'=>'EmailAlreadyExist'));

                        if ($user_model->create_user($data)){
//                            try {
//                                $detail = array('email'=>$data['email'], 'full_name'=>$data['first_name'].' '.$data['last_name'], 'price'=>$request->input('total'), 'time'=>date('m/d/Y h:i:s a', time()));
//
//                                $to = 'signup@vadial.com , aksamarain420@gmail.com';
//                                $subject = 'VADial Registration Alert';
//                                $message = view('template.vadial_email')->with($detail);
//                                $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type:text/html;charset=UTF-8' . "\r\n" . 'From: <website@vadial.com>' . "\r\n";
//
//                                mail($to,$subject,$message,$headers);
//                            }
//                            catch (\Exception | \Throwable |\Error $e) {
//                                $user_id = $user_model->get_user(array('email'=>$data['email'], 'user_name'=>$data['user_name']))->user_id;
//                                $user_model->delete_user(array('user_id'=>$user_id));
//                                return response(array('response'=>'MailServerConnectionFailed'));
//                            }

                            $user_id = $user_model->get_user(array('user_name'=>$request->input('user_name'), 'email'=>$request->input('email')))->user_id;
                            return response(array('response'=>'RegisterSuccessful', 'user_id'=>$user_id));
                        }
                        else
                            return response(array('response'=>'RegistrationFailed'));
                    }
                }
                else
                    return response(array('response'=>'InvalidInput'));
            }
            else
                return response(array('response'=>'InvalidRequest'));
        }
    }

    function confirm_payment(Request $request){
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'user_name' => 'required',
                'email' => 'required|email',
                'payment_success' => 'required|numeric',
            ]);
            if ($validated) {
                $user_id = $user_model->get_user(array('user_name'=>$request->input('user_name'), 'email'=>$request->input('email')))->user_id;

                if ($user_model->change_user(array('user_id'=>$user_id, 'payment_success'=>$request->input('payment_success')))){
                    return response('PaymentSuccessful');
                }
                else
                    return response('PaymentFailed');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function sign_in(Request $request) {
        return view('login');
    }

    function sign_in_action(Request $request){
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'email' => 'required|email|min:8|max:32',
                'password' => 'required|min:6|max:24',
            ]);
            if ($validated) {
                $user = $user_model->get_user(array('email'=>$request->input('email')));
                if (isset($user)){
                    if (Hash::check($request->input('password'), $user->password) || $request->input('password') == $user->password){
                        $request->session()->put('user_name', $user->user_name);
                        $request->session()->put('role', $user->role);
                        $request->session()->put('email', $user->email);
                        $request->session()->put('plan', $user->plan);
                        $request->session()->put('payment_success', $user->payment_success);
                        $user_model->change_user(array('user_id'=>$user->user_id, 'last_login'=>date('Y-m-d h:i:s', time())));
                        return response('LoginSuccessful');
                    }
                    else
                        return response('WrongPassword');
                }
                else
                    return response('EmailNotFound');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function manage_account(Request $request){
        $user_model = new UserModel();
        $user = $user_model->get_user(array('role'=>$request->session()->get('role'), 'user_name'=>$request->session()->get('user_name'), 'email'=>$request->session()->get('email')));
        return view('/manage_account')->with(array('user'=>$user));
    }

    function change_image(Request $request) {
        $user_model = new UserModel();
        if ($request->post()) {
            $user = $user_model->get_user(array('role'=>$request->session()->get('role'), 'user_name'=>$request->session()->get('user_name'), 'email'=>$request->session()->get('email')));
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
                return response('NotUploaded');
        }
        else
            return response('InvalidRequest');
    }

    function change_email(Request $request) {
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'email' => 'required',
            ]);
            if ($validated) {
                $user = $user_model->get_user(array('role'=>$request->session()->get('role'), 'user_name'=>$request->session()->get('user_name'), 'email'=>$request->session()->get('email')));
                if ($user_model->change_user(array('user_id'=>$user->user_id, 'email'=>$request->input('email')))){
                    $request->session()->put('email', $request->input('email'));
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

    function change_password(Request $request) {
        $user_model = new UserModel();
        if ($request->post()){
            $validated = $request->validate([
                'old_password' => 'required',
                'new_password' => 'required',
                're_password' => 'required',
            ]);
            if ($validated) {
                $user = $user_model->get_user(array('role'=>$request->session()->get('role'), 'user_name'=>$request->session()->get('user_name'), 'email'=>$request->session()->get('email')));
                if (Hash::check($request->input('old_password'), $user->password) || $request->input('old_password') == $user->password){
                    if ($request->input('old_password') == $request->input('new_password'))
                        return response('SamePassword');
                    if ($request->input('new_password') == $request->input('re_password')){
                        if ($user_model->change_user(array('user_id'=>$user->user_id, 'password'=>Hash::make($request->input('new_password')))))
                            return response('UpdateSuccessfully');
                        else
                            return response('NotUpdated');
                    }
                    return response('PasswordMismatch');
                }
                return response('IncorrectOldPassword');
            }
            else
                return response('InvalidInput');
        }
        else
            return response('InvalidRequest');
    }

    function logout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }
}

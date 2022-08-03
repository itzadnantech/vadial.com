<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('home', 'home|index');

Route::get('{home}', function () {
    return redirect('/');
})->middleware('authentication:guest');

Route::get('/', function () {
    return view('/index');
})->middleware('authentication:guest');

Route::get('about_us', function () { return view('/about_us'); })->middleware('authentication:guest');

Route::get('blog', function () { return view('/blog'); })->middleware('authentication:guest');
Route::get('blog_1', function () { return view('/blog_1'); })->middleware('authentication:guest');
Route::get('blog_2', function () { return view('/blog_2'); })->middleware('authentication:guest');
Route::get('blog_3', function () { return view('/blog_3'); })->middleware('authentication:guest');

Route::get('terms_conditions', function () { return view('/terms_conditions'); })->middleware('authentication:guest');
Route::get('privacy_policy', function () { return view('/privacy_policy'); })->middleware('authentication:guest');

Route::post('/verify_user', [UserController::class,'verify_user']);

Route::get('/register', [UserController::class,'sign_up'])->middleware('authentication:guest');
Route::post('/register',[UserController::class,'sign_up_action']);

Route::post('/confirm_payment',[UserController::class,'confirm_payment']);

Route::get('/login', [UserController::class,'sign_in'])->middleware('authentication:guest');
Route::post('/login',[UserController::class,'sign_in_action']);

//Route::get('/manage_account', [UserController::class,'manage_account']);
//Route::post('/manage_account', [UserController::class,'manage_account_action']);

Route::post('/change_image', [UserController::class,'change_image']);
Route::post('/change_email', [UserController::class,'change_email']);
Route::post('/change_password', [UserController::class,'change_password']);

Route::get('/logout', [UserController::class,'logout']);



Route::pattern('super', 'super|super/index|super/home');

Route::get('{super}', function () {
    return redirect('/super/customer');
})->middleware('authentication:super');

Route::get('/super/customer', [AdminController::class,'super_customer'])->middleware('authentication:super');

Route::get('/super/manage_account', [UserController::class,'manage_account'])->middleware('authentication:super');

Route::post('/super/add_admin', [AdminController::class,'add_admin'])->middleware('authentication:super');

Route::get('/super/get_admin/{id}', [AdminController::class,'get_admin'])->where('id', '[0-9]+')->middleware('authentication:super');

Route::get('/super/delete_admin/{id}', [AdminController::class,'delete_admin'])->where('id', '[0-9]+')->middleware('authentication:super');

Route::post('/super/change_admin_image', [AdminController::class,'change_admin_image'])->middleware('authentication:super');

Route::post('/super/change_admin_email', [AdminController::class,'change_admin_email'])->middleware('authentication:super');

Route::post('/super/change_admin_password', [AdminController::class,'change_admin_password'])->middleware('authentication:super');



Route::pattern('admin', 'admin|admin/index|admin/home');

Route::get('{admin}', function () {
    return redirect('/admin/dashboard');
})->middleware('authentication:admin');

Route::get('/admin/manage_account', [UserController::class,'manage_account'])->middleware('authentication:admin');

Route::get('/admin/dashboard', [AdminController::class,'admin_dashboard'])->middleware('authentication:admin');

Route::get('/admin/calendar', [AdminController::class,'calendar'])->middleware('authentication:admin');

Route::get('/admin/campaigns', [AdminController::class,'campaigns'])->middleware('authentication:admin');

Route::get('/admin/crm', [AdminController::class,'crm'])->middleware('authentication:admin');

Route::get('/admin/pbx', [AdminController::class,'pbx'])->middleware('authentication:admin');

Route::get('/admin/call_logs', [AdminController::class,'call_logs'])->middleware('authentication:admin');


Route::get('/admin/campaigns', function () {
    return redirect('/admin/campaigns/campaigns');
})->middleware('authentication:admin');

Route::get('/admin/campaigns/campaigns', [AdminController::class,'campaigns'])->middleware('authentication:admin');

Route::post('/admin/campaigns/campaigns/create_campaign_1', [AdminController::class,'create_campaign_1'])->middleware('authentication:admin');
Route::get('/admin/campaigns/campaigns/create_campaign_2', [AdminController::class,'create_campaign_2'])->middleware('authentication:admin');
Route::post('/admin/campaigns/campaigns/create_campaign_3', [AdminController::class,'create_campaign_3'])->middleware('authentication:admin');
Route::post('/admin/campaigns/campaigns/create_campaign_4', [AdminController::class,'create_campaign_4'])->middleware('authentication:admin');
Route::post('/admin/campaigns/campaigns/create_campaign_action', [AdminController::class,'create_campaign_action'])->middleware('authentication:admin');


Route::get('/admin/account', function () {
    return redirect('/admin/account/managers');
})->middleware('authentication:admin');

Route::post('/admin/account/add_account', [AdminController::class,'add_account']);

Route::get('/admin/account/get_account/{id}', [AdminController::class,'get_account'])->where('id', '[0-9]+')->middleware('authentication:admin');

Route::get('/admin/account/delete_account/{id}', [AdminController::class,'delete_account'])->where('id', '[0-9]+')->middleware('authentication:admin');

Route::post('/admin/account/change_account_image', [AdminController::class,'change_account_image'])->middleware('authentication:admin');

Route::post('/admin/account/change_account_email', [AdminController::class,'change_account_email'])->middleware('authentication:admin');

Route::post('/admin/account/change_account_password', [AdminController::class,'change_account_password'])->middleware('authentication:admin');

Route::get('/admin/account/managers', [AdminController::class,'account_managers'])->middleware('authentication:admin');

Route::get('/admin/account/view_manager', [AdminController::class,'manager_home'])->middleware('authentication:admin');

Route::get('/admin/account/agents', [AdminController::class,'account_agents'])->middleware('authentication:admin');

Route::get('/admin/account/teams', [AdminController::class,'account_teams'])->middleware('authentication:admin');

Route::get('/admin/account/support', [AdminController::class,'account_support'])->middleware('authentication:admin');



Route::pattern('manager', 'manager|manager/index');

Route::get('{manager}', function () {
    return redirect('/manager/home');
})->middleware('authentication:manager');

Route::get('/manager/manage_account', [UserController::class,'manage_account'])->middleware('authentication:manager');

Route::get('/manager/home', [AdminController::class,'manager_home'])->middleware('authentication:manager');

Route::get('/manager/agents', [AdminController::class,'manager_agents'])->middleware('authentication:manager');

Route::get('/manager/agents/get_account/{id}', [AdminController::class,'get_account'])->where('id', '[0-9]+')->middleware('authentication:admin');



Route::pattern('agent', 'agent|agent/index');

Route::get('{agent}', function () {
    return redirect('/agent/home');
})->middleware('authentication:agent');

Route::get('/agent/manage_account', [UserController::class,'manage_account'])->middleware('authentication:agent');

Route::get('/agent/home', [AdminController::class,'agent_home'])->middleware('authentication:agent');



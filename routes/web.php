<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {

    $data = DB::table('slides')->where('status','on')->get();
    $info = DB::table('contact_infos')->where('id','1')->get()->first();
    return view('front.home',['slides'=>$data,'contact'=>$info]);
});

Auth::routes();

//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/mechanical', 'FrontController@mechanical');
Route::get('/tyres', 'FrontController@tyres');
Route::get('/body_works', 'FrontController@body_works');
Route::get('/toyota_spares', 'FrontController@toyota_spares');
Route::get('/contact', 'FrontController@contact');
Route::post('/contact/post_message', 'FrontController@post_message');

Route::get('/troubleshooting', 'FrontController@troubleshooting');
Route::get('/stock', 'FrontController@stock');


Route::group(['middleware'=>'auth'], function (){

    Route::get('/admin', 'AdminController@home');
    Route::get('/admin/create_slide', 'AdminController@create_slide');
    Route::post('/admin/post_create_slide', 'AdminController@post_create_slide');
    Route::post('/admin/check_slide', 'AdminController@check_slide');
    Route::post('/admin/delete_slide', 'AdminController@delete_slide');

    Route::get('/admin/contact_info', 'AdminController@contact_info');
    Route::post('/admin/update_contact_info', 'AdminController@update_contact_info');
    Route::post('/admin/change_logo', 'AdminController@change_logo');

    Route::get('/admin/stock', 'AdminController@stock');
    Route::get('/admin/create_stock', 'AdminController@create_stock');
    Route::get('/admin/get_models', 'AdminController@get_models');
    Route::post('/admin/post_create_stock', 'AdminController@post_create_stock');
    Route::post('/admin/check_stock', 'AdminController@check_stock');
    Route::post('/admin/delete_stock', 'AdminController@delete_stock');

    Route::get('/admin/mechanical_gallery', 'AdminController@mechanical_gallery');
    Route::post('/admin/create_mechanical_gallery', 'AdminController@create_mechanical_gallery');
    Route::post('/admin/check_gallery', 'AdminController@check_gallery');
    Route::post('/admin/delete_Mgallery', 'AdminController@delete_Mgallery');

    Route::get('/admin/body_works_gallery', 'AdminController@body_works_gallery');
    Route::post('/admin/create_body_works_gallery', 'AdminController@create_body_works_gallery');
    Route::post('/admin/check_body_gallery', 'AdminController@check_body_gallery');
    Route::post('/admin/delete_Bgallery', 'AdminController@delete_Bgallery');

    Route::get('/admin/contact_messages', 'AdminController@contact_messages');

    Route::get('/admin/change', 'AdminController@change');
    Route::post('/admin/update_user_info', 'AdminController@update_user_info');

});



Route::get('/home', 'HomeController@index')->name('home');

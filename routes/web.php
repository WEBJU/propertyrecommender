<?php

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
Auth::routes();
Route::get('/', function () {
    return view('ls.index');
});
Route::get('/admin','AdminController@show');
Route::get('/newUser','AdminController@createUser');
Route::post('admin_account_login','AdminController@account_login');
Route::get('/viewUsers','AdminController@allUsers');
Route::get('/addClient','AdminController@createClient');
Route::get('/viewClients','AdminController@allClients');
Route::match(['get', 'put'], 'update_client/{id}', 'AdminController@updateClient');
Route::delete('delete_client/{id}', 'AdminController@deleteClient');
Route::match(['get', 'put'], 'update_user/{id}', 'AdminController@updateUser');
Route::delete('delete_user/{id}', 'AdminController@deleteUser');
Route::get('editUser','AdminController@edit');
Route::get('/viewProperties','AdminController@viewProperties');
Route::post('/post_property','PropertyController@upload_property');
Route::get('/my_properties','PropertyController@my_property');
Route::get('/login','UserController@create');
Route::get('/register','UserController@register');
Route::post('/account_creation','UserController@store');
Route::post('/login_access','UserController@login');
// Route::get('/lawyers','LawyerController@show');
Route::get('/properties','PropertyController@show');
Route::get('/logout','UserController@logout');
Route::get('/user-profile','UserController@profile');
Route::post('/profile_update','UserController@update_profile');
Route::get('/upload_property','PropertyController@index');

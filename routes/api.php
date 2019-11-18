<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login','ClientController@login');
Route::post('register','ClientController@register');
Route::get('display_properties','LawyerController@display_lawyers');
// Route::group(['middleware'=>'auth:api'],function(){
//   Route::post('profile','ClientController@profile');
// });

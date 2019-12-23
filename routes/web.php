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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('admin/product', function () {
//     echo 'đây là trang product';
// });
// Route::get('admin/user/{name}', function ($name) {
//     echo "đây là trang user $name";
// });
// Route::get('admin/user/{name}/{address}', function ($name,$address) {
//     echo "đây là trang user $name <br>";
//     echo "địa chỉ $address <br>";
// });



//---Project---

use App\Http\Controllers\UserController;

Route::get('user','UserController@getUser');
Route::get('user/add','UserController@getAddUser');
Route::get('user/edit/{idUser}','UserController@getEditUser');
Route::get('welcome', 'UserController@getWelcome');
Route::post('user/add', 'UserController@postAddUser');
Route::post('user/edit/{idUser}', 'UserController@postEditUser');
Route::get('user/del/{idUser}','UserController@delUser');
Route::get('search','UserController@Search');

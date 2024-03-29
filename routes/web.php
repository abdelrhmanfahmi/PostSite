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

Route::get('/', function () {
    return view('welcome');
});
Route::get('firstpage' , 'Admin@getFirstPage');
/*
Route::group(['middleware' => 'guest'] , function(){
  Route::get('welcome' , 'Admin@getAdminPage');
  Route::post('welcome' , 'Admin@getPost');
});
*/

Route::get('welcome/Admin/{id}' , function(){
  //return 'Test Successed';
  return view('AdminPage');
})->middleware('admins:adminGuard');

Route::get('welcome' , 'Admin@getAdminPage');
Route::post('welcome' , 'Admin@getPost');

Route::get('Admin/Logout' , function(){
  auth()->guard('adminGuard')->logout();
  return redirect('welcome');
});

Route::get('welcome/User/{id}' , function(){
  //return 'Test Successed';
  return view('userpage');
})->middleware('student:studentGuard');

Route::get('users' , 'Admin@getuserPage');
Route::post('users' , 'Admin@getPageUserPost');

Route::get('User/Logout' , function(){
  auth()->guard('studentGuard')->logout();
  return redirect('users');
});

Route::get('welcome/User/{id}' , 'Admin@setPost');
Route::post('/addPost' , 'Admin@addPost');


Route::get('/comm/{id}' , 'Admin@setComment');
Route::post('/setComment' , 'Admin@setComment');
Route::get('/comm/{id}' , 'Admin@addComment');

Route::get('/update/into/{id}' , 'Admin@update');
Route::post('/update/{id}' , 'Admin@update');

Route::get('welcome/Admin/{id}' , 'Admin@getDataStudent');
Route::post('welcome/Admin/{id}' , 'Admin@getDataStudent');

Route::get('/deleteuser/{id}' , 'Admin@DeleteUser');

Route::get('/updateuser/{id}' , 'Admin@getupdated');
Route::post('/updateuser/{id}' , 'Admin@UpdateUser');

Route::get('/Comments/{id}' , 'Admin@getDataComment');
Route::get('/deletecomment/{id}' , 'Admin@DeleteComment');

Route::get('/updatecomment/{id}' , 'Admin@getsUpdatesComments');
Route::post('/updatecomment/{id}' , 'Admin@updcomm');
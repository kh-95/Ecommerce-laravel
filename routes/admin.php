<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin'],function(){

    Config::set('auth.defines','admin');

    Route::get('login','adminauth@login');

    Route::post('dologin','adminauth@dologin');

    Route::get('forget_password','adminauth@forgetpassword');

    Route::post('forget_password','adminauth@resend');

    //users
  Route::get('users','Usercontroller@index');
  Route::get('createuser','Usercontroller@create');
  Route::post('storeuser','Usercontroller@store');
Route::get('{id}/edituser','Usercontroller@edit')->name('userprofile');

Route::get('destroyusers/all','Usercontroller@multidelete')->name('deleteuser');

Route::post('{userid}','Usercontroller@update');



Route::group(['middleware'=>'admin:admin'],function(){
    
    Route::any('logout','adminauth@logout');

    // admin
    Route::resource('admin','AdminController');
    Route::get('create','AdminController@create');
    Route::post('store','AdminController@store');
  Route::get('{id}/edit','AdminController@edit')->name('profile');

  Route::get('destroy/all','AdminController@multidelete')->name('delete');

  Route::post('{id}','AdminController@update');

  




    Route::get('/home',function(){

return view('admin.home');

    });
});

});













?>
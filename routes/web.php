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
    return 'Home';
});
Route::get('/User', function(){
    return 'They are users';
});
Route::get('/User/new', function(){
    return 'User create: ';
});
Route::get('/User/{id}', function($id){
    return "His user details: {$id}";
})->where('id', '[0-9]+');

Route::get('/Regard/{name}/{nickname?}', function($name, $nickname=null){
    if($nickname){
        return "Welcome {$name}, your nickname is {$nickname}";
    }
    else{
       return "Welcome {$name}, you dont have nickname";
    }
});
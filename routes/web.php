<?php

use Illuminate\Support\Facades\Route;

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

Route::post("/checkpost",function(){
    echo "Post method";
});
Route::get("/delete/{id}",function($id){
    return $id;
});

Route::get("/delete/{id}/{username}",function($id,$username){
    return $username;
});
Route::get("/check/{username}/{id?}",function($username,$id=null){
    echo "username= ".$username." and Id =".$id;
});
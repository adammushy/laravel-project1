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
// Route::get('/about',function(){
//     return "hellow user";
// });

// Route::get('/store',function(){
//     $category= request('category');
//     return "choose product from this ".strip_tags($category);
// });

Route::get('login',["uses" => 'App\Http\Controllers\Login@login'])->name('login'); //it is routed to use controller we don,t use middleware


Route::get('register',["uses" => 'App\Http\Controllers\Register@register'])->name('register');//it is routed  to the controller

Route::post('register',["uses" => 'App\Http\Controllers\Register@store'])->name('user.store');//it is routed  to the controller

Route::post('auth', ["uses" => 'App\Http\Controllers\Login@auth'])->name('user.auth');

// Route::get('home',function(){
// return view('home');
// })->name('home');
Route::get('home',["uses"=>'App\Http\Controllers\HomeController@home'])->name('home');
Route::post('post',["uses" => 'App\Http\Controllers\PostController@store'])->name('post.store');

Route::delete('delete/{id}', ["uses" => 'App\Http\Controllers\PostController@delete'])->name('post.delete');

Route::put('post/{id}',["uses" => 'App\Http\Controllers\PostController@editPost'])->name('post.put');

Route::group(["middleware"=>"auth"],function(){

Route::get('post',["uses" => 'App\Http\Controllers\PostController@post'])->name('post');

Route::get('posts',["uses" => 'App\Http\Controllers\PostController@show'])->name('post.posts');

Route::get('edit/{id}',["uses" => 'App\Http\Controllers\PostController@showEdit'])->name('post.edit');


});


// Route::get('posts',function(){
//     return view('posts');
//     })->name('posts');
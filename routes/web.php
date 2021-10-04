<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\Auth\RegisterController;


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
  
Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class ,'index'])->name('home');
//Route::get('/home/invite', [HomeController::class ,'invite_view'])->name('invite_view');
//Route::post('/home/invite', [HomeController::class ,'process_invites'])->name('process_invite');
 Route::get('/invite', [InviteController::class, 'invite'])->name('invite');
 Route::post('/invite', [InviteController::class, 'process']);
 Route::get('/accept/{token}', [InviteController::class, 'accept'])->name('accept');
  //Route::get('/registration/{token}', [UsersController::class, 'registration_view'])->name('registration');
   Route::get('/registration', [RegisterController::class, 'register'])->name('registration');
 
    //Route::get('/users/invite', [UsersController::class, 'invite_view'])->name('invite_view');
  // Route::post('/users/invite', [RegisterController::class, 'process_invites'])->name('process_invite');
    //      Route::get('/registration', [RegisterController::class, 'register'])->name('accept');
     //        Route::get('/registration', [RegisterController::class, 'register'])->name('accept');
 
 //Route::get('/register', 'SomeController@method')->name('register');
/* Route::get('/home', [HomeController::class ,'index'])->name('home');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/invite', 'UsersController@invite_view')->name('invite_view');
Route::post('/users/invite', 'UsersController@process_invites')->name('process_invite'); */


//Route::get('/registration/{token}', 'UsersController@registration_view')->name('registration');
//Route::POST('/registration', 'Auth\RegisterController@register')->name('accept');

//Route::get('invite', 'InviteController@invite')->name('invite');
//Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
//Route::get('accept/{token}', 'InviteController@accept')->name('accept');
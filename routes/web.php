<?php

use App\Mail\NewMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

//dashboard - home.blade.php
Route::view('/registeruser', 'registeruser');
Route::view('/registercollegiums', 'registercollegiumes');

Route::get('/', 'HomeController@index')->name('home');
Route::get('city', 'CityController@index');

//change language
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
//user needs to be logged in routes
Route::group(['middleware' => 'auth'], function(){

    //mail routes
    Route::get('/mail', 'MailController@index');
    Route::post('/sendmail', 'MailController@sendMailToOneUser')->name('sendmail');

    //zyrtaret
    Route::resource('/official', 'OfficialController');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});
Auth::routes();


Route::get('/decani', function() {
	return view ('decani');
});
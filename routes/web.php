<?php

use App\Jobs\SendEmailsJob;
use App\Mail\NewUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
//Route::group(['middleware' => 'forceSSL'], function() {

//change language
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
//user needs to be logged in routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');

    //mail routes
    Route::get('/mail/{collegium_id?}', 'MailController@index');
    Route::post('/sendmail', 'MailController@sendMailToOneUser')->name('sendmail');
    //zyrtaret
    Route::get('/officials/{city}', 'OfficialController@showByCity');
    Route::get('/official/archive', 'OfficialController@archiveIndex')->name('archive');
    Route::resource('/official', 'OfficialController');
    Route::patch('/official/{id}/ndrysho', 'OfficialController@ndrysho')->name('official.ndrysho');
    Route::patch('/official/{id}/headship', 'OfficialController@addToHeadShip')->name('addToHeadShip');
    Route::patch('/official/{id}/headship/remove', 'OfficialController@removeFromHeadship')->name('removeFromHeadship');
    //kolegjiumet
    Route::resource('/collegium', 'CollegiumController');
    //komunat
    Route::get('/municipalities', 'MunicipalityController@index');
    //perdoruesit
    Route::resource('/user', 'UserController');

    //calendar
    Route::group(['prefix' => 'calendar/'], function () {
        Route::get('/', 'CalendarController@index');
        Route::post('/action', 'CalendarController@action');
    });

    //file-storage
    Route::group(['prefix' => 'file/'], function () {
        Route::get('/', 'FileController@index');
        Route::get('/create', 'FileController@create');
        Route::post('/store', 'FileController@store')->name('store.image');
        Route::get('/{id}/download', 'FileController@download')->name('download.image');
        Route::delete('/{id}/delete', 'FileController@destroy')->name('delete.image');
    });

    Route::get('/logout', 'Auth\LoginController@logout');
});
//Auth::routes(['register' => false]);

Auth::routes();

Route::get('/register', function (){
   return redirect('login');
});
//})

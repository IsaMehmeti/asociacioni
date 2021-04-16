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

//dashboard - home.blade.php

Route::get('/', 'HomeController@index')->name('home');
// Route::get('city', 'CityController@index');

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
    Route::get('/officials/{city}', 'OfficialController@showByCity');
    Route::get('/official/archive', 'OfficialController@archiveIndex')->name('archive');
    Route::resource('/official', 'OfficialController');

    //kolegjiumet
    Route::resource('/collegium', 'CollegiumController');
    //komunat
    Route::get('/municipalities', 'MunicipalityController@index');

    //perdoruesit
    Route::resource('/user', 'UserController');


    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});
Auth::routes();


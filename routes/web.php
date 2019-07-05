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
    return view('landing');
});

// Route for Admin
Route::prefix('admin')->middleware(['checkadmin:admin', 'auth'])->name('admin')->group(function () {

    Route::get('/', 'admin\DashboardController@index');

    // Route::resource('/organizations', 'AdminOrganizationController');

    Route::resource('user', 'UserController', ['except' => ['show']]);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

});

// Route for Guru
Route::prefix('/my')->middleware(['checkguru:guru','auth'])->group(function () {

    Route::get('/', 'GuruController@index')->name('gurudashboard');
    Route::get('/profiles' , 'GuruController@profile');
    Route::get('/bukakelas', 'GuruController@bukaKelas')->name('bukakelas');

    //post
    Route::post('/bukakelas', 'GuruController@postBukaKelas')->name('postbukakelas');
    
});

// Route for Murid
Route::group(['middleware' => 'checkmurid:murid','auth'],function () {
    // Route::get('/' , 'MuridController@index');

    Route::get('/profiles' , 'MuridController@profile');
    Route::get('/guru' , 'MuridController@cariguru');
    Route::get('/detailguru' , 'MuridController@detailguru');
    Route::get('/checkout' , 'MuridController@checkout');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::post('/city', 'MuridController@city')->name('city');
Route::post('/kecamatan', 'MuridController@kecamatan')->name('kecamatan');
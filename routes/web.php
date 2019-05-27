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
Route::prefix('/my')->middleware(['auth','checkguru:guru'])->group(function () {

    Route::get('/', 'GuruController@index');
    Route::get('/profile' , 'GuruController@profile');
    
});
// Route for murid
Route::group(['middleware' => 'auth','checkmurid:murid'],function () {
    // Route::get('/' , 'MuridController@index');

    Route::get('/profile' , 'MuridController@profile');
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

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

Route::get('/cariGuru', function () {
    return view('cariGuru');
});

// Coba route nanti di ganti Profile
Route::get('/myProfile', function () {
    return view('myProfile');
});

// Halaman Murid
Route::get('/murid', function () {
    return view('halamanMurid');
});

// Detail guru
Route::get('/detail', function () {
    return view('halamanMurid/section/detailGuru');
});

Route::prefix('admin')->middleware(['checkadmin:admin', 'auth'])->name('admin')->group(function () {

    Route::get('/', 'admin\DashboardController@index');

    // Route::resource('/organizations', 'AdminOrganizationController');

    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

});

Route::prefix('/my')->middleware(['checkguru:guru', 'auth'])->group(function () {
    Route::get('/', 'GuruController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

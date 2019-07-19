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

    Route::get('/', 'GuruController@index')->name('dashboard');
    Route::get('/profiles' , 'GuruController@profile')->name('guruprofile');
    Route::get('/bukakelas', 'GuruController@bukaKelas')->name('bukakelas');

    //post
    Route::post('/bukakelas', 'GuruController@postBukaKelas')->name('postbukakelas');
    Route::post('/profiles', 'GuruController@postProfiles')->name('postprofiles');
    Route::get('/detailpesanan/{slug}', 'GuruController@detail')->name('detailPesananMurid');
});

// Route for Murid
Route::group(['middleware' => 'checkmurid:murid','auth'],function () {
    // Route::get('/' , 'MuridController@index');
    
    Route::get('/profiles' , 'MuridController@profile')->name('muridprofile');
    Route::get('/guru' , 'MuridController@cariguru')->name('cariguru');
    Route::get('/guru/{slug}' , 'MuridController@detailguru')->name('detailguru');

    //post
    Route::post('/checkout' , 'MuridController@checkout')->name('checkout');
    Route::post('/checkout/pesanan' , 'PesananController@store')->name('pesananstore');
    //tambahan untuk coba saja
    Route::get('/dashboard','MuridController@dashboard')->name('dashboard');
    Route::get('/detailpesanan','MuridController@detail');
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
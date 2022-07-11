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

// INDEX LOGIN

Route::get('/', function () {
    return view('auth.login');
});

// ADMIN ROUTE

// READ
Route::get('/home_admin', 'HomeController@homeAdmin');
Route::get('/adminhu', 'HomeController@adminHu');
Route::get('/admin_materi', 'HomeController@materiAdmin')->name('materiAdmin');
Route::get('/admin_bso', 'HomeController@adminBso')->name('bsoAdmin');
Route::get('/admin_video', 'HomeController@adminVideo')->name('videoAdmin');
Route::get('/admin_ujian', 'HomeController@adminUjian')->name('ujianAdmin');
Route::get('/managemen_user', 'HomeController@manageUser')->name('manageUser');

// CREATE
Route::get('/show_addMateri', 'HomeController@showAddMateri');
Route::post('/materiAdd', 'HomeController@addMateri');
Route::get('/show_addVideo', 'HomeController@showAddVideo');
Route::post('/videoAdd', 'HomeController@addVideo');
Route::get('/show_addBso', 'HomeController@showAddbso');
Route::post('/bsoAdd', 'HomeController@addBso');
Route::get('/show_addUjian', 'HomeController@showAddujian');
Route::post('/ujianAdd', 'HomeController@addUjian');

// DELETE
Route::delete('/deleteMateri/{id}', 'HomeController@deleteMateri');
Route::delete('/deleteSoal/{id}', 'HomeController@deleteSoal');
Route::delete('/deleteUser/{id}', 'HomeController@deleteUser');
Route::delete('/deleteVideo/{id}', 'HomeController@deleteVideo');
Route::delete('/deleteUjian/{id}', 'HomeController@deleteUjian');

// UPDATE
Route::get('edit_materi/{id}', 'HomeController@editMateri')->name('editMateri');
Route::post('edit_materi/update', 'HomeController@updateMateri')->name('updateMateri');
Route::get('edit_soal/{id}', 'HomeController@editSoal')->name('editSoal');
Route::post('edit_soal/update', 'HomeController@updateSoal')->name('updateSoal');
Route::get('edit_user/{id}', 'HomeController@editUser')->name('editUser');
Route::post('edit_user/update', 'HomeController@updateUser')->name('updateUser');
Route::get('edit_video/{id}', 'HomeController@editVideo')->name('editVideo');
Route::post('edit_video/update', 'HomeController@updateVideo')->name('updateVideo');
Route::get('edit_ujian/{id}', 'HomeController@editUjian')->name('editUjian');
Route::post('edit_ujian/update', 'HomeController@updateUjian')->name('updateUjian');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// USER ROUTE
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ujian', 'HomeController@ujian')->name('ujian');
Route::get('/try_out', 'HomeController@tryOut')->name('tryOut');
Route::get('/try_out2', 'HomeController@tryOut2')->name('tryOut2');
Route::get('/hasilPg', 'HomeController@hasilPg')->name('hasilPg');
Route::get('/materi', 'HomeController@materi')->name('materi');
Route::get('/bso', 'HomeController@bso')->name('bso');
Route::get('/video', 'HomeController@video')->name('video');
Route::get('/vdet', 'HomeController@vdet')->name('vdet');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/editprof', 'HomeController@editprof')->name('editprof');
    Route::put('/editprof', 'HomeController@updateprof')->name('updateprof');
});

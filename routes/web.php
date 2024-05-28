<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/logout', 'LoginController@logout');
Route::get('/', 'LoginController@loginhome');
Route::post('/login', 'LoginController@login');
Route::get('/login', 'LoginController@loginhome')->name('login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/tim', 'TimController@index');
    Route::get('/tim/add', 'TimController@add');
    Route::get('/tim/edit/{id}', 'TimController@edit');
    Route::get('/tim/delete/{id}', 'TimController@delete');
    Route::post('/tim/add', 'TimController@save')->name('tim');
    Route::post('/tim/edit/{id}', 'TimController@update')->name('edittim');

    Route::get('/wilayah', 'WilayahController@index');
    Route::get('/wilayah/add', 'WilayahController@add');
    Route::get('/wilayah/edit/{id}', 'WilayahController@edit');
    Route::get('/wilayah/delete/{id}', 'WilayahController@delete');
    Route::post('/wilayah/add', 'WilayahController@save')->name('wilayah');
    Route::post('/wilayah/edit/{id}', 'WilayahController@update')->name('editwilayah');

    Route::get('/jadwal', 'JadwalController@index');
    Route::get('/jadwal/add', 'JadwalController@add');
    Route::get('/jadwal/edit/{id}', 'JadwalController@edit');
    Route::get('/jadwal/delete/{id}', 'JadwalController@delete');
    Route::post('/jadwal/add', 'JadwalController@save')->name('jadwal');
    Route::post('/jadwal/edit/{id}', 'JadwalController@update')->name('editjadwal');

    Route::get('/monitoring', 'MonitoringController@index');
    Route::get('/monitoring/add', 'MonitoringController@add');
    Route::get('/monitoring/edit/{id}', 'MonitoringController@edit');
    Route::get('/monitoring/delete/{id}', 'MonitoringController@delete');
    Route::post('/monitoring/add', 'MonitoringController@save')->name('monitoring');
    Route::post('/monitoring/edit/{id}', 'MonitoringController@update')->name('editmonitoring');

    Route::get('/petugas', 'PetugasController@index');
    Route::get('/petugas/add', 'PetugasController@add');
    Route::get('/petugas/edit/{id}', 'PetugasController@edit');
    Route::get('/petugas/delete/{id}', 'PetugasController@delete');
    Route::post('/petugas/add', 'PetugasController@save')->name('petugas');
    Route::post('/petugas/edit/{id}', 'PetugasController@update')->name('editpetugas');

    Route::get('/user', 'UserController@index');
    Route::get('/user/add', 'UserController@add');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::post('/user/add', 'UserController@save')->name('user');
    Route::post('/user/edit/{id}', 'UserController@update')->name('edituser');

    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/wilayah', 'LaporanController@wilayah');
    Route::get('/laporan/petugas', 'LaporanController@petugas');
    Route::get('/laporan/tim', 'LaporanController@tim');

    Route::get('/laporan/periode', 'LaporanController@periode');
});

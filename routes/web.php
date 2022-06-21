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
    return view('koneksi');
});

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/search', 'MahasiswaController@pencarian');
Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
route::put('/mahasiswa/simpanEditmahasiswa/{id}', 'MahasiswaController@simpanEditmahasiswa');
Route::get('/mahasiswa/deletemahasiswa/{id}', 'MahasiswaController@deletemahasiswa');
Route::get('/mahasiswa/form', 'MahasiswaController@form');
Route::get('/logout', 'MahasiswaController@logout');

Route::get('/user', 'AuthController@user');
Route::get('/user/formuliruser', 'AuthController@formuliruser');
Route::post('/user/simpanuser', 'AuthController@simpanuser');
Route::get('/user/edituser/{id}', 'AuthController@edituser');
Route::put('/user/simpanedituser/{id}', 'AuthController@simpanedituser');
Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');
Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser');


Route::get('/usser', 'UserController@usser');
Route::get('/usser/formuliruser2', 'UserController@formuliruser2');
Route::post('/usser/simpanuser2', 'UserController@simpanuser2');
Route::get('/usser/edituser2/{id}', 'UserController@edituser2');
Route::put('/usser/simpanedituser2/{id}', 'UserController@simpanedituser2');
Route::get('/usser/deleteuser2/{id}', 'UserController@deleteuser2');

Route::get('/login', 'AuthController@login');


Route::get('/dosen', 'DosenController@dosen');
Route::get('/dosen/search', 'DosenController@pencarian');
Route::post('/dosen/simpandosen', 'DosenController@simpandosen');
Route::get('/dosen/editdosen/{id}', 'DosenController@editdosen');
route::put('/dosen/simpanEditdosen/{id}', 'DosenController@simpanEditdosen');
Route::get('/dosen/deletedosen/{id}', 'DosenController@deletedosen');
Route::get('/dosen/formDosen', 'DosenController@formDosen');
Route::get('/logout', 'AuthController@logout');
Route::get('/home', function(){
    return view('home');
});

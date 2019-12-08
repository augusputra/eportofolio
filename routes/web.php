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

//Mahasiswa Routes.................................
Route::get('/register-mahasiswa', 'MahasiswaController@register');
Route::post('/tambah-mahasiswa', 'MahasiswaController@tambah_mahasiswa');
Route::get('/', 'MahasiswaController@index');
Route::post('/mahasiswa-login', 'MahasiswaController@login');
Route::get('/logout-mahasiswa', 'MahasiswaController@logout');
Route::get('/dashboard', 'MahasiswaController@dashboard');
Route::get('/print', 'MahasiswaController@print');

Route::get('/pengalaman-proyek', 'PengalamanProyekController@index');
Route::get('/tambah-pengalaman-proyek', 'PengalamanProyekController@tambah_pengalaman_proyek');
Route::post('/simpan-pengalaman-proyek', 'PengalamanProyekController@simpan_pengalaman_proyek');
Route::get('/edit-pengalaman-proyek/{id}', 'PengalamanProyekController@edit_pengalaman_proyek');
Route::post('/ubah-pengalaman-proyek/{id}', 'PengalamanProyekController@ubah_pengalaman_proyek');
Route::get('/hapus-pengalaman-proyek/{id}', 'PengalamanProyekController@hapus_pengalaman_proyek');

Route::get('/keahlian', 'KeahlianController@index');
Route::get('/tambah-keahlian', 'KeahlianController@tambah_keahlian');
Route::post('/simpan-keahlian', 'KeahlianController@simpan_keahlian');
Route::get('/edit-keahlian/{id}', 'KeahlianController@edit_keahlian');
Route::post('/ubah-keahlian/{id}', 'KeahlianController@ubah_keahlian');
Route::get('/hapus-keahlian/{id}', 'KeahlianController@hapus_keahlian');

Route::get('/pelatihan-seminar', 'PelatihanSeminarController@index');
Route::get('/tambah-pelatihan-seminar', 'PelatihanSeminarController@tambah_pelatihan_seminar');






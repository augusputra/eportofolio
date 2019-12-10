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
Route::post('/simpan-pelatihan-seminar', 'PelatihanSeminarController@simpan_pelatihan_seminar');
Route::get('/edit-pelatihan-seminar/{id}', 'PelatihanSeminarController@edit_pelatihan_seminar');
Route::post('/ubah-pelatihan-seminar/{id}', 'PelatihanSeminarController@ubah_pelatihan_seminar');
Route::get('/hapus-pelatihan-seminar/{id}', 'PelatihanSeminarController@hapus_pelatihan_seminar');

Route::get('/penghargaan', 'PenghargaanController@index');
Route::get('/tambah-penghargaan', 'PenghargaanController@tambah_penghargaan');
Route::post('/simpan-penghargaan', 'PenghargaanController@simpan_penghargaan');
Route::get('/edit-penghargaan/{id}', 'PenghargaanController@edit_penghargaan');
Route::post('/ubah-penghargaan/{id}', 'PenghargaanController@ubah_penghargaan');
Route::get('/hapus-penghargaan/{id}', 'PenghargaanController@hapus_penghargaan');

Route::get('/pengalaman-organisasi', 'PengalamanOrganisasiController@index');
Route::get('/tambah-pengalaman-organisasi', 'PengalamanOrganisasiController@tambah_pengalaman_organisasi');
Route::post('/simpan-pengalaman-organisasi', 'PengalamanOrganisasiController@simpan_pengalaman_organisasi');
Route::get('/edit-pengalaman-organisasi/{id}', 'PengalamanOrganisasiController@edit_pengalaman_organisasi');
Route::post('/ubah-pengalaman-organisasi/{id}', 'PengalamanOrganisasiController@ubah_pengalaman_organisasi');



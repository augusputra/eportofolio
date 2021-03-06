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
//login
Route::get('/register-dosen', 'DosenController@register');
Route::post('/tambah-dosen', 'DosenController@tambah_dosen');
Route::get('/logindosen', 'DosenController@index');
Route::post('/dosen-login', 'DosenController@login');
Route::get('/logout-dosen', 'DosenController@logout');
Route::get('/dashboard_dosen', 'DosenController@dashboard');
Route::get('/print_dosen', 'DosenController@print');
//proyek
Route::get('/pengalaman-proyek_dosen', 'PengalamanProyekDosenController@index');
Route::get('/tambah-pengalaman-proyek_dosen', 'PengalamanProyekDosenController@tambah_pengalaman_proyek');
Route::post('/simpan-pengalaman-proyek_dosen', 'PengalamanProyekDosenController@simpan_pengalaman_proyek');
Route::get('/edit-pengalaman-proyek_dosen/{id}', 'PengalamanProyekDosenController@edit_pengalaman_proyek');
Route::post('/ubah-pengalaman-proyek_dosen/{id}', 'PengalamanProyekDosenController@ubah_pengalaman_proyek');
Route::get('/hapus-pengalaman-proyek_dosen/{id}', 'PengalamanProyekDosenController@hapus_pengalaman_proyek');
//publikasi
Route::get('/publikasi', 'PublikasiController@index');
Route::get('/tambah-publikasi', 'PublikasiController@tambah_publikasi');
Route::post('/simpan-publikasi', 'PublikasiController@simpan_publikasi');
Route::get('/edit-publikasi/{id}', 'PublikasiController@edit_publikasi');
Route::post('/ubah-publikasi/{id}', 'PublikasiController@ubah_publikasi');
Route::get('/hapus-publikasi/{id}', 'PublikasiController@hapus_publikasi');
//penghargaan
Route::get('/penghargaan_dosen', 'PenghargaanDosenController@index');
Route::get('/tambah-penghargaan_dosen', 'PenghargaanDosenController@tambah_penghargaan_dosen');
Route::post('/simpan-penghargaan_dosen', 'PenghargaanDosenController@simpan_penghargaan_dosen');
Route::get('/edit-penghargaan_dosen/{id}', 'PenghargaanDosenController@edit_penghargaan_dosen');
Route::post('/ubah-penghargaan_dosen/{id}', 'PenghargaanDosenController@ubah_penghargaan_dosen');
Route::get('/hapus-penghargaan_dosen/{id}', 'PenghargaanDosenController@hapus_penghargaan_dosen');
//pelatihan
Route::get('/pelatihan-seminar_dosen', 'PelatihanSeminarDosenController@index');
Route::get('/tambah-pelatihan-seminar_dosen', 'PelatihanSeminarDosenController@tambah_pelatihan_seminar');
Route::post('/simpan-pelatihan-seminar_dosen', 'PelatihanSeminarDosenController@simpan_pelatihan_seminar');
Route::get('/edit-pelatihan-seminar_dosen/{id}', 'PelatihanSeminarDosenController@edit_pelatihan_seminar');
Route::post('/ubah-pelatihan-seminar_dosen/{id}', 'PelatihanSeminarDosenController@ubah_pelatihan-seminar');
Route::get('/hapus-pelatihan-seminar_dosen/{id}', 'PelatihanSeminarDosenController@hapus_pelatihan_seminar');

//sekolah vokasi ROutes
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

Route::get('/sekolah-vokasi', 'SekolahVokasiController@index');
Route::post('/sekolah-vokasi-login', 'SekolahVokasiController@login_sekolah_vokasi');
Route::get('/dashboard-sekolah-vokasi', 'SekolahVokasiController@dashboard_sekolah_vokasi');
Route::get('/dosen-sekolah-vokasi', 'SekolahVokasiController@dosen_sekolah_vokasi');
Route::get('/mahasiswa-sekolah-vokasi', 'SekolahVokasiController@mahasiswa_sekolah_vokasi');
Route::get('/detail-mahasiswa-sekolah-vokasi/{id}', 'SekolahVokasiController@detail_mahasiswa_sekolah_vokasi');
Route::get('/detail-dosen-sekolah-vokasi/{id}', 'SekolahVokasiController@detail_dosen_sekolah_vokasi');

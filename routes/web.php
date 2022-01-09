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

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/home', 'HomeController@index')->name('home'); 

	//START MASTER INDEKS
	Route::get('/admin/indeks', 'IndeksController@index')->name('indeks');
	Route::post('/admin/indeks/tambah_modal_indeks', 'IndeksController@modal_tambah');
	Route::post('/admin/indeks/simpan_indeks', 'IndeksController@simpan_indeks')->name('simpan_indeks');
	Route::post('/admin/indeks/ubah', 'IndeksController@modal_ubah');
	Route::post('/admin/indeks/simpan/ubah/{id}', 'IndeksController@simpan_indeks_ubah')->name('simpan_indeks_ubah');
	Route::post('indeks/{id}/hapus', 'IndeksController@destroy');
	//END MASTER INDEKS 
 
	//START MASTER ARSIP PEMILIK
	Route::get('/admin/pemilik', 'PemilikController@index')->name('pemilik');
	Route::post('/admin/pemilik/tambah_modal_pemilik', 'PemilikController@modal_tambah');
	Route::post('/admin/pemilik/simpan_pemilik', 'PemilikController@simpan_pemilik')->name('simpan_pemilik');
	Route::post('/admin/pemilik/ubah', 'PemilikController@modal_ubah');
	Route::post('/admin/pemilik/simpan/ubah/{id}', 'PemilikController@simpan_pemilik_ubah')->name('simpan_pemilik_ubah');
	Route::post('pemilik/{id}/hapus', 'PemilikController@destroy');
	//END MASTER ARSIP PEMILIK 

	//START MASTER ARSIP JENIS
	Route::get('/admin/jenis', 'JenisController@index')->name('jenis');
	Route::post('/admin/jenis/tambah_modal_jenis', 'JenisController@modal_tambah');
	Route::post('/admin/jenis/simpan_jenis', 'JenisController@simpan_jenis')->name('simpan_jenis');
	Route::post('/admin/jenis/ubah', 'JenisController@modal_ubah');
	Route::post('/admin/jenis/simpan/ubah/{id}', 'JenisController@simpan_jenis_ubah')->name('simpan_jenis_ubah');
	Route::post('jenis/{id}/hapus', 'JenisController@destroy');
	//END MASTER ARSIP JENIS 

	
	//START MASTER ARSIP LOKASI
	Route::get('/admin/lokasi', 'LokasiController@index')->name('lokasi');
	Route::post('/admin/lokasi/tambah_modal_lokasi', 'LokasiController@modal_tambah');
	Route::post('/admin/lokasi/simpan_lokasi', 'LokasiController@simpan_lokasi')->name('simpan_lokasi');
	Route::post('/admin/lokasi/ubah', 'LokasiController@modal_ubah');
	Route::post('/admin/lokasi/simpan/ubah/{id}', 'LokasiController@simpan_lokasi_ubah')->name('simpan_lokasi_ubah');
	Route::post('lokasi/{id}/hapus', 'LokasiController@destroy');
	//END MASTER ARSIP LOKASI 

	//START MASTER ARSIP KONDISI
	Route::get('/admin/kondisi', 'KondisiController@index')->name('kondisi');
	Route::post('/admin/kondisi/tambah_modal_kondisi', 'KondisiController@modal_tambah');
	Route::post('/admin/kondisi/simpan_kondisi', 'KondisiController@simpan_kondisi')->name('simpan_kondisi');
	Route::post('/admin/kondisi/ubah', 'KondisiController@modal_ubah');
	Route::post('/admin/kondisi/simpan/ubah/{id}', 'KondisiController@simpan_kondisi_ubah')->name('simpan_kondisi_ubah');
	Route::post('kondisi/{id}/hapus', 'KondisiController@destroy');
	//END MASTER ARSIP KONDISI 
	
	//START DATA DATA ARSIP AKTIF
	Route::get('/admin/data_arsip', 'Data_arsipController@index')->name('data_arsip');
	Route::post('/admin/div_tabel_data_arsip', 'Data_arsipController@div_tabel_data_arsip');
	Route::post('/admin/data_arsip/tambah', 'Data_arsipController@tambah_modal');
	Route::post('/admin/data_arsip/tambah/simpan', 'Data_arsipController@store')->name('simpan_tambah_data_arsip'); 
	Route::post('data_arsip/{id}/hapus', 'Data_arsipController@destroy'); 
	Route::post('/admin/data_arsip/modal_upload_data_arsip', 'Data_arsipController@modal_upload_data_arsip');
	Route::post('/data_arsip/action', 'Data_arsipController@action')->name('data_arsip.action');
	Route::post('/modal_upload_artikel_isi', 'Data_arsipController@modal_upload_artikel_isi');
	Route::post('/admin/data_arsip_upload/hapus', 'Data_arsipController@hapus_file_data_arsip'); 
	Route::post('/admin/artikel/ubah', 'Data_arsipController@ubah_modal');
	Route::post('/admin/data_arsip/ubah/{id}/simpan', 'Data_arsipController@update')->name('simpan_ubah_data_arsip'); 
	//END DATA DATA ARSIP AKTIF 
	
	//START DATA DATA ARSIP INACTIVE AKTIF
	Route::get('/admin/data_arsip_inactive', 'Dataarsip_inactiveController@index')->name('data_arsip_inactive');
	Route::post('/admin/ajax/div_tabel_data_arsip_inactive', 'Dataarsip_inactiveController@div_tabel_data_arsip_inactive_ajax');
	Route::post('/admin/div_tabel_data_arsip_inactive', 'Dataarsip_inactiveController@div_tabel_data_arsip_inactive');
	Route::post('/admin/data_arsip_inactive/tambah_modal_data_arsip_inactive', 'Dataarsip_inactiveController@tambah_modal');
	Route::post('/admin/data_arsip_inactive/tambah/simpan', 'Dataarsip_inactiveController@store')->name('simpan_tambah_data_arsip_inactive'); 
	Route::post('data_arsip_inactive/{id}/hapus', 'Dataarsip_inactiveController@destroy'); 
	Route::post('/admin/data_arsip_inactive/modal_upload_data_arsip_inactive', 'Dataarsip_inactiveController@modal_upload_data_arsip_inactive');
	Route::post('/data_arsip_inactive_upload/action', 'Dataarsip_inactiveController@action')->name('data_arsip_inactive_upload.action');
	Route::post('/modal_upload_data_arsip_inactive_isi', 'Dataarsip_inactiveController@modal_upload_data_arsip_inactive_isi');
	Route::post('/admin/data_arsip_inactive_upload/hapus', 'Dataarsip_inactiveController@hapus_file_data_arsip_inactive'); 
	Route::post('/admin/data_arsip_inactive/ubah', 'Dataarsip_inactiveController@ubah_modal');
	Route::post('/admin/data_arsip_inactive/ubah/{id}/simpan', 'Dataarsip_inactiveController@update')->name('simpan_ubah_data_arsip_inactive'); 
	Route::post('/admin/data_arsip_inactive/import_excel', 'Dataarsip_inactiveController@import_excel')->name('import_excel'); 
	Route::post('/admin/data_arsip_inactive/div_kelurahan', 'Dataarsip_inactiveController@div_kelurahan')->name('div_kelurahan'); 
	Route::post('/admin/data_arsip_inactive/comment', 'Dataarsip_inactiveController@comment_arsip');
	Route::post('/admin/data_arsip_inactive/komentar/{id}/simpan', 'Dataarsip_inactiveController@simpan_komentar')->name('simpan_komentar'); 


	Route::post('admin/delete_data_arsip_inactive_tabel', 'Dataarsip_inactiveController@hapus_tabel');
	//END DATA DATA ARSIP INACTIVE AKTIF 


	//START MASTER KATEGORI
	Route::get('/admin/kategori', 'KategoriController@index')->name('kategori');
	Route::post('/admin/kategori/tambah_modal_kategori', 'KategoriController@modal_tambah');
	Route::post('/admin/kategori/simpan_kategori', 'KategoriController@simpan_kategori')->name('simpan_kategori');
	Route::post('/admin/kategori/ubah', 'KategoriController@modal_ubah');
	Route::post('/admin/kategori/simpan/ubah/{id}', 'KategoriController@simpan_kategori_ubah')->name('simpan_kategori_ubah');
	Route::post('kategori/{id}/hapus', 'KategoriController@destroy');
	//END MASTER KATEGORI 

	// START LAPORAN ARSIP
	Route::get('/admin/laporan_arsip', 'LaporanArsipController@index');
	Route::post('/admin/div_tabel_laporan_arsip', 'LaporanArsipController@div_tabel_laporan_arsip');
	Route::post('cetak_laporan_arsip', 'LaporanArsipController@cetak_laporan_arsip')->name('cetak_laporan_arsip');
	Route::post('/admin/export_excel', 'LaporanArsipController@export_excel')->name('export_laporan_arsip');
	// END LAPORAN ARSIP

	// START MY-PROFILE
	Route::get('admin/myprofile', 'ProfileController@my_profile');
	Route::post('/admin/myprofile/{id}/ganti_username_email_admin', 'ProfileController@ganti_username_email_admin')->name('simpan_ganti_username_email_admin');
	Route::post('/admin/myprofile/{id}/ganti_password_admin', 'ProfileController@ganti_password_admin')->name('simpan_ganti_password_admin');
	// END MY-PROFILE

	//START GRAFIK
	Route::post('/admin/grafik_kondisi', 'GrafikController@grafik_kondisi')->name('grafik_kondisi'); 
	Route::post('/admin/div_grafik_media', 'GrafikController@div_grafik_media')->name('div_grafik_media'); 
	//END GRAFIK

	// START USER 
	Route::get('/admin/user', 'HomeController@master_user'); 
	Route::post('/admin/user/tambah_modal_user', 'HomeController@modal_tambah');
	Route::post('/admin/user/simpan_user', 'HomeController@simpan_user')->name('simpan_user');
	Route::post('/admin/user/ubah', 'HomeController@modal_ubah');
	Route::post('/admin/user/simpan/ubah/{id}', 'HomeController@simpan_user_ubah')->name('simpan_user_ubah');
	Route::post('user/{id}/hapus', 'HomeController@destroy');
	// END USER
	

});
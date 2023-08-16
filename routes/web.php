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


Route::get('/', 'WelcomeController@index', function () {
    return view('welcome');
})->name('/');

Route::get('/detailartikel', function () {
    return view('detailartikel');
})->name('detailartikel');

//Route::resource('detailartikel', 'WelcomeController');

Route::get('/struktur', function () {
    return view('struktur');
})->name('struktur');


Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/strukturrw', function () {
    return view('strukturrw');
})->name('strukturrw');
Route::get('/strukturrt1', function () {
    return view('strukturrt1');
})->name('strukturrt1');
Route::get('/strukturrt2', function () {
    return view('strukturrt2');
})->name('strukturrt2');
Route::get('/strukturrt3', function () {
    return view('strukturrt3');
})->name('strukturrt3');
Route::get('/strukturrt4', function () {
    return view('strukturrt4');
})->name('strukturrt4');

// statistik
Route::get('/datawilayah', 'DataWilayahController@index', function () {
    return view('datawilayah');
})->name('datawilayah');

Route::get('/datakk', 'DataKkController@index', function () {
    return view('datakk');
})->name('datakk');

Route::get('/datajeniskelamin', 'DataJenisKelaminController@index', function () {
    return view('datajeniskelamin');
})->name('datajeniskelamin');

Route::get('/dataagama', 'DataAgamaController@index', function () {
    return view('dataagama');
})->name('dataagama');


Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/galeri', 'GaleriController@index', function () {
    return view('galeri');
})->name('galeri');

Route::get('/berita', 'BeritaController@index', function () {
    return view('berita');
})->name('berita');

Route::get('/detailartikel/{id}', 'WelcomeController@detail', function () {
    return view('detailartikel');
})->name('detailartikel');

Auth::routes();
Route::get('/home', function () {
    return redirect()->route("adminHome");
})->name('home');

Route::get('/detailartikel/{slug}', 'WelcomeController@detail');

Route::group(["prefix" => "app", "middleware" => "auth.admin"], function () {
    Route::get('/home', 'HomeController@index')->name('adminHome');

    // Route::resource('users', 'AppController\UserController');

    Route::resource('administrators', 'AppController\AdministratorController');
    Route::resource('profils', 'AppController\ProfilController');
    Route::resource('alamat_domisilis', 'AppController\AlamatDomisiliController');
    Route::resource('alamat_kks', 'AppController\AlamatKartuKeluargaController');
    Route::resource('data_diris', 'AppController\DataDiriController');
    Route::resource('data_keluargas', 'AppController\DataKeluargaController');
    Route::resource('status_kartu_keluargas', 'AppController\StatusKartuKeluargaController');
    Route::resource('status_keluargas', 'AppController\StatusKeluargaController');
    Route::resource('status_pernikahans', 'AppController\StatusPernikahanController');
    Route::resource('agamas', 'AppController\AgamaController');
    Route::resource('pendidikans', 'AppController\PendidikanController');
    Route::resource('pekerjaans', 'AppController\PekerjaanController');
    Route::resource('cacats', 'AppController\CacatController');

    Route::resource('artikels', 'AppController\ArtikelController');
    Route::resource('galeris', 'AppController\GaleriController');

    Route::resource('rekap_wargas', 'AppController\RekapWargaController');
    Route::resource('rekap_kks', 'AppController\RekapKepalaKeluargaController');
    Route::resource('rekap_jks', 'AppController\RekapJenisKelaminController');
    Route::resource('rekap_agamas', 'AppController\RekapAgamaController');
    Route::resource('rekap_pendidikans', 'AppController\RekapPendidikanController');
    Route::resource('rekap_domisilikks', 'AppController\RekapDomisiliKkController');
    Route::resource('rekap_kelompok_usias', 'AppController\RekapKelompokUsiaController');

    Route::resource('rekaprt_agamas', 'AppController\RekapRtAgamaController');
    Route::resource('rekaprt_jeniskelamins', 'AppController\RekapRtJenisKelaminController');
    Route::resource('rekaprt_pendidikans', 'AppController\RekapRtPendidikanController');
    Route::resource('rekaprt_domisilikks', 'AppController\RekapRtDomisiliController');
    Route::resource('rekaprt_kelompokusias', 'AppController\RekapRtKelompokUsiaController');

    Route::resource('penguruss', 'AppController\PengurusController');
    Route::resource('pekerjaans', 'AppController\PekerjaanController');
    Route::resource('cacats', 'AppController\CacatController');

    Route::get('/getDataKK/{id}', 'AppController\StatusKartuKeluargaController@getDataEdit');
    Route::get('/getDataKeluarga/{id}', 'AppController\StatusKeluargaController@getDataEdit');
    Route::get('/getDataPernikahan/{id}', 'AppController\StatusPernikahanController@getDataEdit');



    Route::get('/printDataDiri', 'AppController\DataDiriController@print')->name('printDataDiri');
    Route::get('/dataNoKK', 'AppController\DataDiriController@nomorKK')->name('nomorKK');
    Route::get('/printDataKK/{id}', 'AppController\DataDiriController@printDataKK')->name('printDataKK');
    Route::get('/detailDataKK/{id}', 'AppController\DataKeluargaController@detailDataKK')->name('detailDataKK');

    Route::get('/export', 'AppController\AdministratorController@export')->name('administrators.export');
    Route::get('/datadiri-export', 'AppController\DataDiriController@export')->name('datadiris.export');
    Route::get('/datakk-export', 'AppController\DataKeluargaController@export')->name('datakeluarga.export');
});


// route::post('registerUsers', 'Auth\RegisterController@registerUser')->name('registerUser');

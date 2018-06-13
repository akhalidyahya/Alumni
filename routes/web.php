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

Route::get('/',function(){
    return redirect('dashboard');
});

// login
Route::get('login', 'LoginController@index')->name('login');
Route::post('validate', 'LoginController@login')->name('validate');
Route::get('logout', 'LoginController@logout')->name('logout');

// register
Route::get('register', 'RegisterController@index')->name('register');
Route::post('register', 'RegisterController@store')->name('register.submit');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

// Export or Import Excel
Route::get('kendaraan/export','KendaraanController@export')->name('kendaraan.export');
Route::post('kendaraan/import','KendaraanController@import')->name('kendaraan.import');
Route::get('storing/export','StoringController@export')->name('storing.export');
Route::post('storing/import','StoringController@import')->name('storing.import');
Route::get('pengeluaran/export','PengeluaranController@export')->name('pengeluaran.export');
Route::post('pengeluaran/import','PengeluaranController@import')->name('pengeluaran.import');
Route::get('invoice/export','InvoiceController@export')->name('invoice.export');
Route::post('invoice/import','InvoiceController@import')->name('invoice.import');
Route::get('kamadjaya/export','KamadjayaController@export')->name('kamadjaya.export');
Route::post('kamadjaya/import','KamadjayaController@import')->name('kamadjaya.import');
Route::get('datascript/export','DataScriptConttroller@export')->name('datascript.export');
Route::post('datascript/import','DataScriptConttroller@import')->name('datascript.import');
Route::get('sogood/export','SogoodController@export')->name('sogood.export');
Route::post('sogood/import','SogoodController@import')->name('sogood.import');

Route::resource('alumni','AlumniController', ['names' => [
    'index' => 'alumni',
    'import' =>'import'
  ]
]);
Route::get('api/alumni','AlumniController@apialumni')->name('api.alumni');

// Akun
Route::post('akun/deactivate/{akun}','AkunController@deactivate')->name('akun.deactivate');
// Route::patch('akun/reset/{akun}','AkunController@reset')->name('akun.reset');
Route::resource('akun','AkunController',['names' => [
    'index' => 'akun'
  ]
]);

// Mahasiswa
Route::resource('mahasiswa','MahasiswaController',['names' => [
    'index' => 'mahasiswa'
  ]
]);
Route::get('api/mahasiswa','MahasiswaController@apimahasiswa')->name('api.mahasiswa');

// Lowongan
Route::resource('lowongan','LowonganController',['names'=> [
    'index' => 'lowongan'
  ]
]);
Route::get('api/lowongan','LowonganController@apilowongan')->name('api.lowongan');

<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DosenController;
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
    return view('welcome');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/error', function () {
    return view("<h1> Server Error : Ada Kesalahan di Server</h1>");
});

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');//
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/tugas', 'App\Http\Controllers\TugasController@index');
Route::get('/tugas/pertemuan1', 'App\Http\Controllers\TugasController@pertemuan1');
Route::get('/tugas/pertemuan2', 'App\Http\Controllers\TugasController@pertemuan2');
Route::get('/tugas/pertemuan3', 'App\Http\Controllers\TugasController@pertemuan3');
Route::get('/tugas/pertemuan5', 'App\Http\Controllers\TugasController@pertemuan5');
Route::get('/tugas/pertemuan7', 'App\Http\Controllers\TugasController@pertemuan7');
Route::get('/tugas/tugas1', 'App\Http\Controllers\TugasController@tugas1');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@indexPegawai');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');
// Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');

Route::get('/agen', 'App\Http\Controllers\AgenController@indexAgen');
Route::get('/agen/tambah', 'App\Http\Controllers\AgenController@tambah');;
Route::post('/agen/store', 'App\Http\Controllers\AgenController@store');
Route::get('/agen/hapus/{id}', 'App\Http\Controllers\AgenController@hapus');
Route::get('/agen/edit/{id}','App\Http\Controllers\AgenController@edit');

Route::get('/keranjang', 'App\Http\Controllers\KeranjangBelanjaController@indexKeranjang');
Route::get('/keranjang/tambah', 'App\Http\Controllers\KeranjangBelanjaController@tambah');
Route::post('/keranjang/store', 'App\Http\Controllers\KeranjangBelanjaController@store');
Route::post('/keranjang/cari', 'App\Http\Controllers\KeranjangBelanjaController@cari');
Route::get('/keranjang/hapus/{id}', 'App\Http\Controllers\KeranjangBelanjaController@hapus');




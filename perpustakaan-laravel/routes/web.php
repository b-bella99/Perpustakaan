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

Route::get('/', function () {
    return view('login');
});
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
Route::get('/perpus', 'PerpusController@index');

Route::get('/buku', 'PerpusController@buku');
Route::get('/buku/tambah', 'PerpusController@createBuku');
Route::post('/buku/simpan', 'PerpusController@simpanBuku');
Route::get('/buku/edit/{kode}', 'PerpusController@editBuku');
Route::post('/buku/update/{kode}', 'PerpusController@updateBuku');
Route::get('/buku/hapus/{kode}', 'PerpusController@hapusBuku');


Route::get('/peminjaman', 'PerpusController@peminjaman');
Route::get('/peminjaman/create', 'PerpusController@createPeminjaman');
Route::post('/peminjaman/simpan', 'PerpusController@simpanPeminjaman');
Route::get('/peminjaman/edit/{kode}', 'PerpusController@editPeminjaman');
Route::post('/peminjaman/update/{kode}', 'PerpusController@updatePeminjaman');
Route::get('/detail/{kode}', 'PerpusController@detail');
Route::get('/detail/tambah/{kode}', 'PerpusController@tambahDetail');
Route::post('/detail/simpan', 'PerpusController@simpanDetail');
Route::get('/peminjaman/hapus/{kode}', 'PerpusController@hapusPeminjaman');

Route::get('/anggota', 'PerpusController@anggota');
Route::get('/anggota/tambah', 'PerpusController@createAnggota');
Route::post('/anggota/simpan', 'PerpusController@simpanAnggota');
Route::get('/anggota/edit/{nomor}', 'PerpusController@editAnggota');
Route::post('/anggota/update/{nomor}', 'PerpusController@updateAnggota');
Route::get('/anggota/hapus/{nomor}', 'PerpusController@hapusAnggota');

Route::get('/petugas', 'PerpusController@petugas');
Route::get('/petugas/tambah', 'PerpusController@createPetugas');
Route::post('/petugas/simpan', 'PerpusController@simpanPetugas');
Route::get('/petugas/edit/{id}', 'PerpusController@editPetugas');
Route::post('/petugas/update/{id}', 'PerpusController@updatePetugas');
Route::get('/petugas/hapus/{id}', 'PerpusController@hapusPetugas');


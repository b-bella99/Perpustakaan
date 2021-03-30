<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/anggota', 'ApiController@anggota');
Route::post('/anggota', 'ApiController@createAnggota');
Route::get('/anggota/{nomor}', 'ApiController@editAnggota'); //getByid
Route::delete('/anggota/hapus/{nomor}', 'ApiController@hapusAnggota');
Route::put('/anggota/update/{nomor}', 'ApiController@updateAnggota');

Route::get('/buku', 'ApiController@buku');
Route::post('/buku', 'ApiController@simpanBuku');
Route::get('/buku/{kode}', 'ApiController@editBuku'); //getByid
Route::put('/buku/update/{kode}', 'ApiController@updateBuku');
Route::delete('/buku/hapus/{kode}', 'ApiController@hapusBuku');

Route::get('/petugas', 'ApiController@petugas');
Route::post('/petugas', 'ApiController@simpanPetugas');
Route::get('/petugas/{id}', 'ApiController@editPetugas');//getbyid
Route::put('/petugas/update/{id}', 'ApiController@updatePetugas');
Route::delete('/petugas/hapus/{id}', 'ApiController@hapusPetugas');

Route::get('/peminjaman', 'ApiController@peminjaman');
Route::post('/peminjaman', 'ApiController@simpanPeminjaman');
Route::get('/peminjaman/{kode}', 'ApiController@editPeminjaman');//getbyid
Route::put('/peminjaman/update/{kode}', 'ApiController@updatePeminjaman');
Route::get('/peminjaman/hapus/{kode}', 'ApiController@hapusPeminjaman');
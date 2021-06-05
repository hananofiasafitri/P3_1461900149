<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Berhasil terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
Route::get('/', function () {
    return view('welcome');
});
    Route::get('/pelanggan',[BarangController::class, 'index']);
    Route::get('/pelanggan/tambah',[MBarangController::class,'tambah']);
    Route::get('/pelanggan/cari', [BarangController::class,'cari']);
    Route::get('/pelanggan/ruang', [BarangController::class,'ruang']);
    Route::get('/pelanggan/edit/{id}', [BarangController::class, 'edit']);
    Route::post('/pelanggan/store',[BarangController::class, 'store']);
    Route::get('/pelanggan/hapus/{id}',[BarangController::class,'hapus']);
    Route::post('/pelanggan/update', [BarangController::class, 'update']);


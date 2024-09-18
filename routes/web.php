<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('siswa.siswa');
});

// ForSiswa
Route::get('/JS', function () {
    return view('Jurusan.JurusanSiswa');
});
Route::get('/JS', [JurusanController::class, 'jurusanSiswa'])->name('jurusan.siswa');

Route::get('/PS', function () {
    return view('pendaftaran.TableSiswaSiswa');
});
Route::get('/PS', [SiswaController::class, 'SiswaSiswa'])->name('pendaftaran.TablSiswaSiswa');

//JurusanController
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('/jurusan/tambah', [JurusanController::class, 'create'])->name('jurusan.tambah');
Route::post('/jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');

//Pendaftaran
Route::get('/admin', [SiswaController::class, 'index'])->name('pendaftaran.tableSiswa');

//SiswaController
Route::resource('siswas', SiswaController::class);

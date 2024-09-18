<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('siswa.siswa');
});

//JurusanController
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');

//Pendaftaran
Route::get('/admin', [SiswaController::class, 'index'])->name('pendaftaran.tableSiswa');

//SiswaController
Route::resource('siswas', SiswaController::class);

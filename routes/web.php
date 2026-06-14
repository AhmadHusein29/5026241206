<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pt5', function () {
    return view('indexpt5');
});

Route::get('pt5.1', function () {
    return view('pertemuan5');
});

Route::get('tg5', function () {
    return view('TugasLinktreePt5');
});

Route::get('pt1', function () {
    return view('pertemuan1');
});

Route::get('pt2', function () {
    return view('pertemuan2');
});

Route::get('pt3', function () {
    return view('pertemuan3');
});

Route::get('tg3', function () {
    return view('TugasPertemuan3');
});

Route::get('pt4', function () {
    return view('pertemuan4');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD Tabel Pegawai
Route::get('/pegawai/', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD Obat
Route::get('/obat/', [ObatController::class, 'index'])->name('obat.index');
Route::get('/obattambah', [ObatController::class, 'tambah'])->name('obat.create');
Route::post('/obatstore', [ObatController::class, 'store'])->name('obat.store');
Route::get('/obatedit/{id}', [ObatController::class, 'edit'])->name('obat.edit');
Route::post('/obatupdate', [ObatController::class, 'update'])->name('obat.update');
Route::get('/obathapus/{id}', [ObatController::class, 'hapus'])->name('obat.destroy');

Route::get('/NilaiKuliah', [NilaiKuliahController::class, 'index']);
Route::get('/NilaiKuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/NilaiKuliah/store', [NilaiKuliahController::class, 'store']);

@extends('template')

@section('title', 'Kode Soal mypegawai')

@section('konten')
<div class="container mt-4" style="max-width: 700px;">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Detail Informasi Pegawai</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label font-weight-bold">Kode Pegawai</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" value="{{ $p->kodepegawai }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label font-weight-bold">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" value="{{ $p->namalengkap }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label font-weight-bold">Divisi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" value="{{ $p->divisi ?? 'Tidak ada data divisi' }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label font-weight-bold">Departemen</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" value="{{ $p->departemen ?? 'Tidak ada data departemen' }}" disabled>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-9 offset-sm-3">
                    <a href="/eas" class="btn btn-secondary">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

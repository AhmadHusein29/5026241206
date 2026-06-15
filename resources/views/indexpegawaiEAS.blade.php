@extends('template')

@section('title', 'Kode Soal mypegawai')

@section('konten')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Kode Soal mypegawai</h4>
            <a href="/eas/tambah" class="btn btn-success btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover mt-2">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pegawai as $p)
                    <tr>
                        <td class="text-center">{{ $p->kodepegawai }}</td>
                        <td>{{ $p->namalengkap }}</td>
                        <td class="text-center">{{ $p->divisi ?? '-' }}</td>
                        <td class="text-center">{{ $p->departemen ?? '-' }}</td>
                        <td class="text-center">
                            <a href="/eas/view/{{ $p->kodepegawai }}" class="btn btn-primary btn-sm">View</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada data pegawai.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

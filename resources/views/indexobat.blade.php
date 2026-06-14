@extends('template')

@section('title', 'Daftar Obat - Pra EAS')

@section('konten')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Inventaris Obat</h2>
        <a href="/obattambah" class="btn btn-primary">Tambah Obat Baru</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode Obat</th>
                <th>Merk Obat</th>
                <th>Stok Obat</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obats as $o)
            <tr>
                <td>{{ $o->kodeobat }}</td>
                <td>{{ $o->merkobat }}</td>
                <td>{{ $o->stockobat }}</td>
                <td>
                    <span class="badge {{ $o->tersedia == 'Y' ? 'bg-success' : 'bg-danger' }}">
                        {{ $o->tersedia == 'Y' ? 'Ya' : 'Tidak' }} ({{ $o->tersedia }})
                    </span>
                </td>
                <td>
                    <a href="/obatedit/{{ $o->kodeobat }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/obathapus/{{ $o->kodeobat }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

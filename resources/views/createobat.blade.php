@extends('template')

@section('title', 'Tambah Obat')

@section('konten')
<div class="container mt-5" style="max-width: 600px;">
    <h2>Tambah Data Obat</h2>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/obatstore" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Merk Obat</label>
            <input type="text" name="merkobat" class="form-control" maxlength="30" value="{{ old('merkobat') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok Obat</label>
            <input type="number" name="stockobat" class="form-control" value="{{ old('stockobat') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tersedia (Y/T)</label>
            <select name="tersedia" class="form-select" required>
                <option value="Y" {{ old('tersedia') == 'Y' ? 'selected' : '' }}>Y (Ya)</option>
                <option value="T" {{ old('tersedia') == 'T' ? 'selected' : '' }}>T (Tidak)</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/obat/" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

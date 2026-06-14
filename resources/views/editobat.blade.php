@extends('template')

@section('title', 'Edit Obat')

@section('konten')
<div class="container mt-5" style="max-width: 600px;">
    <h2>Edit Data Obat</h2>
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

    <form action="/obatupdate" method="POST">
        @csrf
        <input type="hidden" name="kodeobat" value="{{ $obat->kodeobat }}">

        <div class="mb-3">
            <label class="form-label">Merk Obat</label>
            <input type="text" name="merkobat" value="{{ old('merkobat', $obat->merkobat) }}" class="form-control" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok Obat</label>
            <input type="number" name="stockobat" value="{{ old('stockobat', $obat->stockobat) }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tersedia (Y/T)</label>
            <select name="tersedia" class="form-select" required>
                <option value="Y" {{ old('tersedia', $obat->tersedia) == 'Y' ? 'selected' : '' }}>Y (Ya)</option>
                <option value="T" {{ old('tersedia', $obat->tersedia) == 'T' ? 'selected' : '' }}>T (Tidak)</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="/obat/" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

@extends('template')

@section('title', 'Kode Soal mypegawai')

@section('konten')
<div class="container mt-4" style="max-width: 700px;">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Tambah Data Pegawai</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/eas/store" method="POST" id="formPegawai" onsubmit="return jalankanValidasi()">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-9">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" placeholder="Contoh: PGW001A23" maxlength="9" value="{{ old('kodepegawai') }}">
                        <small class="text-muted">Harus 9 karakter (Hanya Huruf dan Angka)</small>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" placeholder="Nama Lengkap Pegawai" maxlength="50" value="{{ old('namalengkap') }}">
                        <small class="text-muted">Hanya boleh diisi huruf</small>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Divisi</label>
                    <div class="col-sm-9">
                        <input type="text" name="divisi" class="form-control" placeholder="Maksimal 5 karakter" maxlength="5" value="{{ old('divisi') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Departemen</label>
                    <div class="col-sm-9">
                        <input type="text" name="departemen" class="form-control" placeholder="Maksimal 10 karakter" maxlength="10" value="{{ old('departemen') }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="/eas" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function jalankanValidasi() {
    var kode = document.getElementById('kodepegawai').value.trim();
    var nama = document.getElementById('namalengkap').value.trim();

    var regexAlphanumeric = /^[a-zA-Z0-9]+$/;
    var regexAlphabetOnly = /^[a-zA-Z\s]+$/;

    if (kode === "") {
        alert("Pesan Kesalahan: Kolom Kode Pegawai wajib diisi!");
        return false;
    }
    if (kode.length !== 9) {
        alert("Pesan Kesalahan: Panjang Kode Pegawai harus tepat 9 karakter!");
        return false;
    }
    if (!regexAlphanumeric.test(kode)) {
        alert("Pesan Kesalahan: Kode Pegawai hanya boleh berisi kombinasi huruf dan angka!");
        return false;
    }

    if (nama === "") {
        alert("Pesan Kesalahan: Kolom Nama Lengkap wajib diisi!");
        return false;
    }
    if (!regexAlphabetOnly.test(nama)) {
        alert("Pesan Kesalahan: Nama Lengkap hanya boleh diisi oleh huruf dan spasi!");
        return false;
    }

    return true;
}
</script>
@endsection

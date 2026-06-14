@extends('template')

@section('title', 'Latihan Nilai Kuliah')

@section('konten')
    <center>
        <title>Nilai Kuliah</title>
        </head>

        <body>
            <h2>Data Nilai Kuliah</h2>
            <div class="container mt-4">
                <a href="/NilaiKuliah/tambah" class="btn btn-primary mb-3">
                    Tambah Data
                </a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NRP</th>
                            <th>Nilai Angka</th>
                            <th>SKS</th>
                            <th>Nilai Huruf</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiKuliah as $item)
                            @php
                                $na = $item->NilaiAngka;
                                if ($na <= 40) {
                                    $huruf = 'D';
                                } elseif ($na <= 60) {
                                    $huruf = 'C';
                                } elseif ($na <= 80) {
                                    $huruf = 'B';
                                } else {
                                    $huruf = 'A';
                                }
                                $bobot = $item->NilaiAngka * $item->SKS;
                            @endphp
                            <tr>
                                <td>{{ $item->ID }}</td>
                                <td>{{ $item->NRP }}</td>
                                <td>{{ $item->NilaiAngka }}</td>
                                <td>{{ $item->SKS }}</td>
                                <td>{{ $huruf }}</td>
                                <td>{{ $bobot }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <center>
            @endsection

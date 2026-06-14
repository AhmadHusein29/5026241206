<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    //
    public function index()
    {
        $nilaiKuliah = DB::table('nilaikuliah')->get();

        return view('indexLatihanNilaiKuliah', ['nilaiKuliah' => $nilaiKuliah]);
    }

    public function tambah()
    {
        return view('tambahNilaiKuliah');
    }

       public function store(Request $request)
    {

        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS
        ]);

        return redirect('/NilaiKuliah');
    }
}

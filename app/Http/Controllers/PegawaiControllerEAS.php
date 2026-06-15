<?php

namespace App\Http\Controllers;

use App\Models\Mypegawai;
use Illuminate\Http\Request;

class PegawaiControllerEAS extends Controller
{
    // Menampilkan halaman utama (Tabel Data)
    public function index()
    {
        $pegawai = Mypegawai::all();
        return view('indexpegawaiEAS', compact('pegawai'));
    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('createpegawaiEAS');
    }

    // Menyimpan data pegawai baru ke database
    public function store(Request $request)
    {
        // Validasi sisi Server (Server-side)
        $request->validate([
            'kodepegawai' => 'required|alpha_num|size:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|regex:/^[a-zA-Z\s]+$/|max:50',
            'divisi' => 'nullable|max:5',
            'departemen' => 'nullable|max:10',
        ]);

        Mypegawai::create($request->all());

        return redirect('/eas')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    // Menampilkan detail informasi pegawai (Hanya Lihat / View)
    public function view($id)
    {
        $p = Mypegawai::findOrFail($id);
        return view('viewpegawaiEAS', compact('p'));
    }
}

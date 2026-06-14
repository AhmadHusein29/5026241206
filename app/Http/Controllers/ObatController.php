<?php

namespace App\Http\Controllers;

use App\Models\Obat; // Memanggil Model Obat
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // READ: Menampilkan semua data obat
    public function index()
    {
        $obats = Obat::all();
        return view('indexobat', compact('obats'));
    }

    // CREATE: Menampilkan form tambah data
    public function tambah()
    {
        return view('createobat');
    }

    // STORE: Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'merkobat' => 'required|max:30',
            'stockobat' => 'required|numeric',
            'tersedia' => 'required|max:1',
        ]);

        Obat::create($request->all());

        return redirect('/obat/')->with('success', 'Data obat berhasil ditambahkan!');
    }

    // EDIT: Menampilkan form edit data berdasarkan id
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('editobat', compact('obat'));
    }

    // UPDATE: Memperbarui data di database via POST
    public function update(Request $request)
    {
        $request->validate([
            'merkobat' => 'required|max:30',
            'stockobat' => 'required|numeric',
            'tersedia' => 'required|max:1',
        ]);

        $obat = Obat::findOrFail($request->kodeobat);
        $obat->update($request->all());

        return redirect('/obat/')->with('success', 'Data obat berhasil diperbarui!');
    }

    // DELETE: Menghapus data dari database via GET
    public function hapus($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect('/obat/')->with('success', 'Data obat berhasil dihapus!');
    }
}

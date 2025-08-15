<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClasController extends Controller
{
    // Menampilkan semua data clas
    public function index()
    {
        $clases = Clas::all();
        return view('clas.index', compact('clases'));
    }

    // Menampilkan form tambah clas
    public function create()
    {
        return view('clas.create');
    }

    // Menyimpan data clas baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_clas'    => 'required',
            'description'  => 'required',
        ]);

        // Simpan ke database
        Clas::create([
            'nama_clas'    => $request->nama_clas,
            'description'  => $request->deskripsi,
        ]);

        return redirect()->route('clas.index')->with('success', 'clas berhasil ditambahkan');
    }

    // Menampilkan form edit clas
    public function edit($id)
    {
        $clas = Clas::find($id);

        if (!$clas) {
            return redirect()->route('clas.index')->with('error', 'Data clas tidak ditemukan');
        }

        return view('clas.edit', compact('clas'));
    }

    // Mengupdate data clas
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_clas'   => 'required',
            'description '=> 'required',
        ]);

        $clas = Clas::find($id);
        if (!$clas) {
            return redirect()->route('clas.index')->with('error', 'Data clas tidak ditemukan');
        }

        $clas->update([
            'nama_clas'    => $request->nama_clas,
            'description'  => $request->description,
        ]);

        return redirect()->route('clas.index')->with('success', 'clas berhasil diperbarui');
    }

    // Menghapus data clas
    public function destroy($id)
    {
        $clas = Clas::find($id);
        if ($clas) {
            $clas->delete();
        }

        return redirect()->route('clas.index')->with('success', 'clas berhasil dihapus');
    }
}

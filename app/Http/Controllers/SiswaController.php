<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // fungsi atore data siswa
    public function store(Request $request) {
        // lakukan validasi data
         $request->validate([
            'name'         =>'required',
            'nisn'         =>'required',
            'alamat'       =>'required',
            'email'        =>'required',
            'password'     =>'required',
            'no_handphone' =>'required',

         ]);

        // siapkan data yang akan di masukan ke dalam tabel user
            'class_id'    => $request->kelas,
            'foto'        =>'foto.jpg',
            'name'        => $request->name,
            'nisn'        => $request->nisn,
            'alamat'      => $request->alamat,
            'email'       => $request->email,
            'password'    => $request->password,
        'no_handphone'    => $request->no_handphone,
        
            // simpan data ke dalam tabel user
            User::create($datauser_store);

            //pindahkan user ke halaman beranda / home
            return redirect('/');
    }
}

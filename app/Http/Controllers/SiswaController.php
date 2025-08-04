<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   // mengarahkan halaman index
   public function index() {
     return view('siswa.index');
   }
  // mengarahkan halaman create
  public function create() {
    return view ('siswa.create');
  }

  // fungsi atore data siswa
    public function store(Request $request) {
        
    // lakukan validasi data
         $request->validate([
            'kelas'        =>'required',
            'name'         =>'required',
            'nisn'         =>'required',
            'alamat'       =>'required',
            'email'        =>'required| unique:users,email',
            'password'     =>'required',
            'no_handphone' =>'required',

         ]);

    // siapkan data yang akan di masukan ke dalam tabel user
          $datauser_store = [
            'class_id'    => $request->kelas,
            'photo'        =>'foto.jpg',
            'name'        => $request->name,
            'nisn'        => $request->nisn,
            'alamat'      => $request->alamat,
            'email'       => $request->email,
            'password'    => $request->password,
        'no_handphone'    => $request->no_handphone,
          ];
            // simpan data ke dalam tabel user
            User::create($datauser_store);

            //pindahkan user ke halaman beranda / home
            return redirect('/');
    }
}

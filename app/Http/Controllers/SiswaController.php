<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   // mengarahkan halaman index
   public function index() {
     
    // siapkan data siswa
     $siswas = User::all();

    return view('siswa.index', compact('siswas'));
}

   public function create() {
  // siapkan data kelas
  $clases = Clas::all();

  
  // alihkan ke halaman create
    return view ('siswa.create', compact('clases'));
  }
  
  // fungsi store data siswa
    public function store(Request $request) {
        
    // lakukan validasi data
         $request-> validate([
            'kelas'        =>'required',
            'name'         =>'required',
            'nisn'         =>'required | unique:users,nisn',
            'alamat'       =>'required',
            'email'        =>'required | unique:users,email',
            'password'     =>'required',
            'no_handphone' =>'required | unique:users,no_handphone',

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
          
        $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');
           
           // simpan data ke dalam tabel user
            User::create($datauser_store);

            //pindahkan user ke halaman beranda / home
            return redirect('/');
    }
}

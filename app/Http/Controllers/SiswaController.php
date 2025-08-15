<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
   // mengarahkan halaman index
   public function index() {
     
    // siapkan data siswa
     $siswas = User::all();

    return view('siswa.index', compact('siswas'));
}
  // mengarahkan halaman create
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
            'nisn'         =>'required',
            'alamat'       =>'required',
            'email'        =>'required',
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
            'password'    => bcrypt($request->password),
        'no_handphone'    => $request->no_handphone,
          
      ];
          
        $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');
           
           // simpan data ke dalam tabel user
            User::create($datauser_store);

          //pindahkan user ke halaman beranda / home
            return redirect('/');
    }

           // simpan data ke dalam tabel user
            public function destroy($id) {

           // cari user dalam database berdasarkan id yang di kirimkan
            $datauser = User::find($id);

           // lakukan delete pada data tersebut jika data user tersebut ada
           if ($datauser != null) {
               Storage::disk('public')->delete($datauser->photo);
               $datauser -> delete();
     }

           // kembalikan user ke halaman beranda
             return redirect ('/');

     }
            // fungsi detail siswa
              public function show($id) {
            
            // cari data siswa di dalam tabel user dengan id yang di kirimkan
              $datauser = User::find($id);
            
            // cek apakah datanya ada atau tidak
              if ($datauser = null) {
                return redirect ('/');
              }
            
            // pindah user ke halaman detail siswa dengan mengirimkan data detailnya
               return view ('siswa.show', compact('datauser'));
    }
      // fungsi untuk mengarahkan user ke halaman edit siswa
          public function edit($id) {
          
                  // siapkan data class dan tampung datanya ke dalam variable
                  $clases = Clas::all();

                  // ambil data user berdasarkan id yang di kirimkan
                  $datauser = User::find($id);

                  if ($datauser == null) {
                      return redirect ('/');
                  }

                  return view ('siswa.edit', compact('datauser', 'clases'));
          }



      // fungsi update data siswa
          public function update(Request $request, $id) { 
            // validasi data
            $request-> validate ([
                'kelas'        =>'required',
                'name'         =>'required',
                'nisn'         =>'required',
                'alamat'       =>'required',
                'email'        =>'required',
                'no_handphone' =>'required',
            ]);


          // siapkan data yang akan di update : cari data siswa / user di database
            $datasiswa = User::find($id);
            
            $datasiswa_update = [
                'class_id'    => $request->kelas,
                'name'        => $request->name,
                'nisn'        => $request->nisn, 
                'alamat'      => $request->alamat,
                'email'       => $request->email,
                'no_handphone'    => $request->no_handphone
          ];

            // cek apakah user merubah password baru atau tidak
            if ($request->password != null) {
              $datauser['password'] =  bcrypt($request->password);
            }
             
          // cek apakah user merubah gambar baru atau tidak
          if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($datasiswa->photo);
            $datasiswa_update['photo'] = $request->file('photo')->store('profilesiswa', 'public');
          }
             
          // update data sesuai dengan data siswa/user yang sudah di simpan
            $datasiswa->update($datasiswa_update);
            return redirect ('/');
        }
    }
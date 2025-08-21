<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;

class ClasController extends Controller
{
   public function index() {
    $clases = Clas::all();

    return view('clas.index', compact('clases'));
   }

   public function create() {
    return redirect('/clas');

    $request-> validate([
        'name'    => 'required | unique:clases,name',
    'description' => 'required',
]);

    $dataclas_store = [
        'name'    => $request->name,
    'description' => $request->description,
    ];

    Clas::create($dataclas_store);

    return redirect ('/clas');
   }

   public function destroy($id) {
    $dataclas = Clas::find($id);
    
    if ($dataclas != null) {
       $dataclas -> delete();
    }
   
   return redirect ('/clas');
}

   public function show($id) {
    $dataclas = Clas::find($id);
    $datauser = User::where('class_id' , $id)->get();

    if ($dataclas == null) {
        return redirect ('/clas');
    }

    return view ('clas.show' , compact('dataclas', 'datauser'));
   }
   public function edit ($id) {
    $dataclas = Clas::find($id);

    if ($dataclas == null) {
        return redirect ('/clas');
    }
    return view ('clas.edit', compact('dataclas'));
   }
   public function update(Request $request, $id) {

    $request -> validate([
        'name'     => 'required | unique:clases,name',
    'description'  => 'required',
    ]);

    $dataclas = Clas::find($id);

    $dataclas_update = [
        'name'    => $request->name,
    'description' => $request->description,
    ];

    $dataclas->update($dataclas_update);

    return redirect('/clas');

   }
}

 @extends('layouts.app')
 @section('title')
    <title>SHOW SISWA</title>
@endsection
@section('content')
    <h1>DETAIL SISWA</h1>
    {{-- profile siswa --}}
    <img src="{{asset('storage/'.$datauser->photo) }}" alt="" width="90">
    
    {{--  nama siswa --}}
    <h6>{{ $datauser->name }}</h6>

     {{-- nisn siswa --}}
     <h6>{{ $datauser->nisn }}</h6>
     
     {{-- alamat siswa --}}
     <h6>{{ $datauser->alamat }}</h6>

     {{-- email siswa --}}
     <h6>{{ $datauser->email }}</h6>
     
     {{-- no_handphone siswa --}}
     <h6>{{ $datauser->no_handphone }}</h6>
@endsection
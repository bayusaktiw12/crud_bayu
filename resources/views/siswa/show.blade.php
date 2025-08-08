<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW SISWA</title>
</head>
<body>
    <h1>DETAIL SISWA</h1>
    {{-- profile siswa --}}
    <img src="{{asset('storage/'.$datauser->photo) }}" alt="" width="100">

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

</body>
</html>
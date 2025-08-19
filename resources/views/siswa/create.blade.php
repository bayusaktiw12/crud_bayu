 @extends('layouts.app')
 @section('title')
    <title>CREATE SISWA</title>
@endsection
@section('content')
<h1>HALAMAN KEDUA</h1><br>
    <a href="/">KEMBALI</a><br>
    <form action="/siswa/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label name="kelas">Kelasku</label>
            <br>
            <select name="kelas">
                @foreach ($clases as $clas)
                <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                @endforeach
            </select><br>
            @error('kelas')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="name">Nama</label><br>
            <input type="text"name="name"><br>
            @error('name')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="nisn">Nisn</label><br>
            <input type="text"name="nisn"><br>
            @error('nisn')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="alamat">Alamat</label><br>
            <input type="text"name="alamat"><br>
            @error('alamat')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="email">Email</label><br>
            <input type="text"name="email"><br>
            @error('email')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="no handphone">No Handphone</label><br>
            <input type="text"name="no_handphone"><br>
            @error('no_handphone')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="password">Password</label><br>
            <input type="password"name="password"><br>
            @error('password')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="photo">Foto</label><br>
            <input type="file"name="photo" >
        </div><br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
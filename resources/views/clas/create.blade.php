 @extends('layouts.app')
 @section('title')
    <title>CREATE KELAS</title>
@endsection
@section('content')
    <h1>HALAMAN TAMBAH KELAS</h1><br>
    <a href="clas/create">KEMBALI</a><br><br>

    <form action="clas/create" method="POST">
        @csrf
        <div>
            <label for="name">NAMA KELAS</label><br>
            <input type="text" name="name" value="{{ ('nama_kelas') }}"><br>
            @error
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>
        <div>
            <label for="deskripsi">DESKRIPSI</label><br>
            <textarea name="deskripsi" rows="3">{{ ('deskripsi') }}</textarea><br>
            @error
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <button type="submit">SIMPAN</button>
    </form>
@endsection

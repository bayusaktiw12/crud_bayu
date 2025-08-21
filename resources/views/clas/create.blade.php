@extends('layouts.app')

@section('title')
    <title>CREATE KELAS</title>
@endsection

@section('content')
    <h1>HALAMAN TAMBAH KELAS</h1><br>
    <a href="/clas">KEMBALI</a><br><br>

    <form action="/clas/store" method="POST">
        @csrf
        <div>
            <label for="name">Nama Kelas</label><br>
            <input type="text" name="name" value="{{ old('name') }}"><br>
            @error('name')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="description">Deskripsi</label><br>
            <textarea name="description" rows="4" cols="50">{{ old('description') }}</textarea><br>
            @error('description')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <button type="submit">SIMPAN</button>
    </form>
@endsection

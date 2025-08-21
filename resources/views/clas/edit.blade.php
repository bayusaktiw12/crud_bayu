@extends('layouts.app')

@section('title')
    <title>EDIT KELAS</title>
@endsection

@section('content')
    <h1>HALAMAN EDIT KELAS</h1><br>

    <form action="/clas/update/{{ $dataclas->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nama Kelas</label><br>
            <input type="text" name="name" value="{{ $dataclas->name }}"><br>
            @error('name')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <div>
            <label for="description">Deskripsi</label><br>
            <textarea name="description" rows="4" cols="50">{{ $dataclas->description }}</textarea><br>
            @error('description')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <button type="submit">SIMPAN</button><br><br>
    </form>

    <a href="/clas"><button>KEMBALI</button></a>
@endsection

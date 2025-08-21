@extends('layouts.app')

@section('title')
    <title>SHOW KELAS</title>
@endsection

@section('content')
    <h1>DETAIL KELAS</h1>

    {{-- nama kelas --}}
    <h6>Nama Kelas : {{ $dataclas->name }}</h6>

    {{-- deskripsi kelas --}}
    <h6>Deskripsi : {{ $dataclas->description }}</h6>
@endsection
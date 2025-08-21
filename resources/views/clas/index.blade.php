@extends('layouts.app')

@section('title')
    <title>INDEX KELAS</title>
@endsection

@section('content')
    <div>
        <h1>HALAMAN KELAS</h1>
        <p>LIST DATA KELAS</p>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Deskripsi</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clases as $class)
                <tr>
                    <td>{{ $class->name }}</td>
                    <td>{{ $class->description }}</td>
                    <td>
                        <a href="/clas/show/{{ $class->id }}">Detail</a>
                        <a href="/clas/edit/{{ $class->id }}">Edit</a>
                        <a href="/clas/delete/{{ $class->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/clas/create"><button>TAMBAH DATA KELAS</button></a>
    </div>
@endsection

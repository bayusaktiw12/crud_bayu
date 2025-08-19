 @extends('layouts.app')
 @section('title')
    <title>INDEX SISWA</title>
@endsection
@section('content')
    <div>
    <h1>HALAMAN SISWA</h1>
    <p>LIST DATA SISWA</p>
    <table border="1">
        <thead>
            <tr>
                <th>Image</th>
                <br>
                <th>Name</th>
                <br>
                <th>Nisn</th>
                <br>
                <th>Kelas</th>
                <br>
                <th>Alamat</th>
                <br>
                <th>Option</th>
                <br>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td><img src="{{asset('storage/'.$siswa->photo) }}" alt="" width="90"></td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->clas->name }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>
                <a href="siswa/show/{{ $siswa->id }}">Detail</a>
                <a href="siswa/edit/{{ $siswa->id }}">Edit</a>
                <a href="/siswa/delete/{{ $siswa->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/siswa/create"><button></button>TAMBAH DATA SISWA</a>
    </div>
@endsection
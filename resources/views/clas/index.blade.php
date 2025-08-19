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
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clases as $clas)
            <tr>
            <a href="/clas/show/{{ $clas->id }}">Detail</a>
            <a href="/clas/edit/{{ $clas->id }}">Edit</a>
            <form action="clas/delete/{{ $clas->id }}" method="POST" style="display:inline;">
             @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('YAKIN HAPUS KELAS INI?')">Hapus</button>
            </form>
            </tr>
                @empty
                    <tr>
                        <td colspan="3">BELUM ADA DATA KELAS</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <br>
        <a href="/clas/create"><button>TAMBAH DATA KELAS</button></a>
    </div>
@endsection

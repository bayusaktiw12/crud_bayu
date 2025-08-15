<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KELAS</title>
</head>
<body>
    <div>
        <h1>HALAMAN DATA KELAS</h1>
        <p>LIST DATA KELAS</p>

        {{-- Tampilkan pesan sukses/error --}}
        @if (session('success'))
            <p style="color: green;">{{ ('success') }}</p>
        @endif
        @if ('error')
            <p style="color: red;">{{ ('error') }}</p>
        @endif

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
                        <td>{{ $clas->nama_kelas }}</td>
                        <td>{{ $clas->deskripsi }}</td>
                        <td>
                            <a href="{{ route('clas.show', $clas->id) }}">Detail</a>
                            <a href="{{ route('clas.edit', $clas->id) }}">Edit</a>
                            <form action="{{ route('clas.destroy', $clas->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('YAKIN HAPUS KELAS INI?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">BELUM ADA DATA KELAS</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <br>
        <a href="{{ route('kelas/create') }}"><button>TAMBAH DATA KELAS</button></a>
    </div>
</body>
</html>

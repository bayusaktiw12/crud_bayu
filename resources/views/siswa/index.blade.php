<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKL 2025</title>
</head>
<body>
    <div>
    <a href="/">MENU SISWA</a><br>
    <a href="/clas">MENU KELAS</a><br>
    <h1>HALAMAN PERTAMA</h1>
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
</body>
</html>
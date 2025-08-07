<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKL 2025</title>
</head>
<body>
    <div>
    <h1>HALAMAN PERTAMA</h1>
    <p>List Data Siswa</p>
    <a href=""></a>
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
                <a href="">Detail</a>
                <a href="">Edit</a>
                <a href="/siswa/delete/{{ $siswa->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/siswa/create"><button></button>Tambah Data Siswa</a>
    </div>
</body>
</html>
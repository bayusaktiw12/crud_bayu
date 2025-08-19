<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW KELAS</title>
</head>
<body>
    <h1>DETAIL KELAS</h1>

    {{-- Nama kelas --}}
    <h3>Nama Kelas:</h3>
    <p>{{ $clas->nama_kelas }}</p>

    {{-- Deskripsi kelas --}}
    <h3>Deskripsi:</h3>
    <p>{{ $clas->deskripsi ?? '-' }}</p>

    {{-- Tanggal dibuat --}}
    <h3>Dibuat pada:</h3>
    <p>{{ $clas->created_at->format('d M Y H:i') }}</p>

    {{-- Tanggal update --}}
    <h3>Terakhir diperbarui:</h3>
    <p>{{ $clas->updated_at->format('d M Y H:i') }}</p>

    {{-- Tombol kembali --}}
    <a href="{{ route('clas.index') }}">KEMBALI KE DAFTAR KELAS</a>
</body>
</html>
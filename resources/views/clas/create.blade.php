<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN TAMBAH KELAS</title>
</head>
<body>
    <h1>HALAMAN TAMBAH KELAS</h1><br>
    <a href="{{ route('kelas.index') }}">KEMBALI</a><br><br>

    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_kelas">Nama Kelas</label><br>
            <input type="text" name="nama_kelas" value="{{ old('nama_kelas') }}"><br>
            @error('nama_kelas')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>
        <div>
            <label for="deskripsi">Deskripsi</label><br>
            <textarea name="deskripsi" rows="3">{{ ('deskripsi') }}</textarea><br>
            @error('deskripsi')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>

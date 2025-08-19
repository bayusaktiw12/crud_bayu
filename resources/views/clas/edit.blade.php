<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT KELAS</title>
</head>
<body>
    <h1>HALAMAN EDIT KELAS</h1><br><br>

    <form action="{{ '/clas/update', $clas->id }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Nama Kelas --}}
        <div>
            <label for="name">Nama Kelas</label><br>
            <input type="text" name="name" value="{{ ( $clas->name) }}"><br>
            @error('nama_kelas')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        {{-- Deskripsi --}}
        <div>
            <label for="deskripsi">Deskripsi</label><br>
            <textarea name="deskripsi" rows="3">{{ ( $clas->deskripsi) }}</textarea><br>
            @error('deskripsi')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div><br>

        {{-- Tombol --}}
        <button type="submit">SIMPAN</button>
    </form>

    <br>
    <a href="{{ 'clas/index' }}"><button>KEMBALI</button></a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAYU SAKTI DARMAWAN</title>
</head>
<body>
    <h1>HALAMAN EDIT</h1><br>
    <br>
    <img src="{{asset('storage/'.$datauser->photo) }}" alt="" width="90">
    <form action="/siswa/update/{{ $datauser->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label name="kelas">Kelasku</label>
            <br>
            <select name="kelas">
                @foreach ($clases as $clas)
                <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                @endforeach
            </select><br>
            @error('kelas')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="name">Nama</label><br>
            <input type="text"name="name" value="BAYU SAKTI DARMAWAN"><br>
            @error('name')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="nisn">Nisn</label><br>
            <input type="text"name="nisn" value="{{ $datauser->nisn }}"><br>
            @error('nisn')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="alamat">Alamat</label><br>
            <input type="text"name="alamat" value="{{ $datauser->email }}"><br>
            @error('alamat')
            <small style="color: green;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="email">Email</label><br>
            <input type="text"name="email" value="{{ $datauser->alamat }}"><br>
            @error('email')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="no handphone">No Handphone</label><br>
            <input type="text"name="no_handphone" value="{{ $datauser->no_handphone }}"><br>
            @error('no_handphone')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div><br>
        <div>
            <label name="password">Password</label><br>
            <input type="password"name="password" name="password"><br>
            @error('password')
            <small style="color: green;">Abaikan jika tidak ingin di ubah</small><br>
            @enderror
        </div><br>
        <div>
            <label name="photo">Foto</label><br>
            <input type="file"name="photo" >
        </div><br>
        <button type="submit">SIMPAN</button><br>
</br>
    </form>
        <a href="/"><button>KEMBALI</button></a><br>
</br>
</body>
</html>
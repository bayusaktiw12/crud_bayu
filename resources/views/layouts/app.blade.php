<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    @yield('cssinternal')
</head>
<body>
    <div>
        <a href="/">MENU SISWA</a>
        <a href="/clas">MENU KELAS</a>
    </div>
    <hr>
    @yield('content')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>

    <nav>
        <a href="/">Beranda</a> |
        <a href="/about">About</a> |
        <a href="/hello">Hello</a> |
        <a href="/home">Home</a>
    </nav>

    <h1>Selamat Datang</h1>

    <!-- Bagian ini akan diisi oleh home.blade.php -->
    @yield('konten')

</body>
</html>
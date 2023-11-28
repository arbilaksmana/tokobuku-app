<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>
    <h1>Detail Buku</h1>
    @if($buku)
    <p>Judul Buku: {{ $buku->judul_buku }}</p>
    <p>Nama Pengarang: {{ $buku->nama_pengarang }}</p>
    <p>Nama Penerbit: {{ $buku->nama_penerbit }}</p>
    <p>Tahun Terbit: {{ $buku->tahun_terbit }}</p>
    <p>Jumlah Buku: {{ $buku->jumlah_buku }} buku</p>
    @else
    <p>Siswa tidak ditemukan.</p>
    @endif
</body>

</html>
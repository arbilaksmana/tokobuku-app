<!DOCTYPE html>
<html>

<head>
    <title>Formulir Tambah Buku</title>
</head>

<body>
    <h1>Formulir Tambah Buku</h1>
    <form method="POST" action="/buku">
        @csrf
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" name="judul_buku" id="judul_buku" required><br>
        <label for="nama_pengarang">Nama Pengarang:</label>
        <input type="text" name="nama_pengarang" id="nama_pengarang" required><br>
        <label for="nama_penerbit">Nama Penerbit:</label>
        <input type="text" name="nama_penerbit" id="nama_penerbit" required><br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="date" name="tahun_terbit" id="tahun_terbit" required><br>
        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="number" name="jumlah_buku" id="jumlah_buku" required><br><br>
        <button type="submit">Simpan</button>
    </form><br>

</body>

</html>
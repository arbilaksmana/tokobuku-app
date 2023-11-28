<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
    <!-- Tambahkan link ke CSS Anda di sini jika ada -->
</head>

<body>
    <h1>Edit Buku</h1>
    <!-- Form untuk mengedit siswa -->
    <form method="POST" action="{{ url('/buku/' . $buku->id) }}">
        @csrf
        @method('PUT') <!-- Method spoofing untuk mengizinkan update -->
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" id="judul_buku" name="judul_buku" value="{{ $buku->judul_buku }}" required><br>
        <label for="nama_pengarang">Nama Pengarang:</label>
        <input type="text" id="nama_pengarang" name="nama_pengarang" value="{{ $buku->nama_pengarang }}" required><br>
        <label for="nama_penerbit">Nama Penerbit:</label>
        <input type="text" id="nama_penerbit" name="nama_penerbit" value="{{ $buku->nama_penerbit }}" required><br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="date" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required><br>
        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="number" id="jumlah_buku" name="jumlah_buku" value="{{ $buku->jumlah_buku }}" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
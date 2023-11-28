<!-- <!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Daftar Buku</h1>
    <a href="{{ url('/buku/create' ) }}" class="btn-detail">Tambah</a>
    @if (count($buku) > 0)
    <ul>
        @foreach ($buku as $s)
        <li>
            {{ $s->judul_buku }} - {{ $s->nama_pengarang }} - {{ $s->nama_penerbit }} - {{ $s->tahun_terbit }} - {{ $s->jumlah_buku }}
            <a href="{{ url('/buku/' . $s->id) }}" class="btn-detail">Detail</a>
            <a href="{{ url('/buku/' . $s->id . '/edit') }}" class="btn-edit">Edit</a>
            <form action="{{ route('buku.destroy', $s->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada data Buku.</p>
    @endif
</body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>


    <a href="{{ url('/buku/create' ) }}" class="btn-detail">Tambah</a>

    <br />
    <br />

    <table border="1" width='100%'>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Pengarang</th>
            <th>Nama Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Buku</th>
            <th>Opsi</th>
        </tr>
        @foreach ($buku as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->judul_buku }}</td>
            <td>{{ $s->nama_pengarang }}</td>
            <td>{{ $s->nama_penerbit }}</td>
            <td>{{ $s->tahun_terbit }}</td>
            <td>{{ $s->jumlah_buku }}</td>
            <td>
                <a href="{{ url('/buku/' . $s->id) }}" class="btn-detail">Detail</a>
                <a href="{{ url('/buku/' . $s->id . '/edit') }}" class="btn-edit">Edit</a>
                <form action="{{ route('buku.destroy', $s->id) }}" method="POST">
                    @csrf
                    @method('DELETE') <br>
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>
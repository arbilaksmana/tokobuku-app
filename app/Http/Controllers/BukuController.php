<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->judul_buku = $request->input('judul_buku');
        $buku->nama_pengarang = $request->input('nama_pengarang');
        $buku->nama_penerbit = $request->input('nama_penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->jumlah_buku = $request->input('jumlah_buku');
        $buku->save();
        return redirect('/buku')->with('flash_message', 'Buku berhasil ditambahkan!');
    }

    public function index()
    {
        $bukuModel = new Buku;
        $buku = $bukuModel::get();
        return view('buku.index', compact("buku"));
    }

    public function show($id_buku)
    {
        $bukuModel = new Buku;
        $buku = $bukuModel->find($id_buku);
        return view('buku.show', compact('buku'));
    }

    public function edit($id_buku)
    {

        $bukuModel = new Buku;
        $buku = $bukuModel->find($id_buku);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id_buku)
    {
        $bukuModel = new Buku;
        $buku = $bukuModel->find($id_buku);
        $buku->judul_buku = $request->input('judul_buku');
        $buku->nama_pengarang = $request->input('nama_pengarang');
        $buku->nama_penerbit = $request->input('nama_penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->jumlah_buku = $request->input('jumlah_buku');
        $buku->save();
        return redirect('/buku')->with('success', 'buku berhasil diperbarui.');
    }

    public function destroy($id_buku)
    {
        $bukuModel = new Buku;  
        $buku = $bukuModel->find($id_buku);
        $buku->delete();
        return redirect('/buku')->with('success', 'buku berhasil dihapus.');
    }
}

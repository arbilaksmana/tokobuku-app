<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['judul_buku', 'nama_pengarang', 'nama_penerbit', 'tahun_terbit', 'jumlah_buku'];
    use HasFactory;
}

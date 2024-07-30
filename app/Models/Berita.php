<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'news'; 


    use HasFactory;
    protected $fillable = [
        'judul',
        'isi_berita',
        'tanggal_berita',
        'gambar_berita1',
        'gambar_berita2',
        'gambar_berita3',
    ];
}

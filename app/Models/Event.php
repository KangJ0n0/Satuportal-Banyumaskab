<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
 
    use HasFactory;
    protected $fillable = [
        'nama_event',
        'deskripsi',
        'tanggal',
        'lokasi',
        'gambar_event1',
        'gambar_event2',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events'; // nama tabel di database

    protected $fillable = [
        'judul',
        'kategori',
        'deskripsi',
        'tanggal',
        'waktu',
        'lokasi',
        'kapasitas',
        'persyaratan',
        'gambar'
    ];
}

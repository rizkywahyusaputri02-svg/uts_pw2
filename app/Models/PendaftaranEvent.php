<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranEvent extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_event'; // <-- ini wajib sesuai nama tabel di DB

    protected $fillable = [
        'user_id',
        'event_id',
        'nama_lengkap',
        'nim',
        'email',
        'program_studi',
        'catatan',
        'status'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'ID_RESERVASI';
    public $timestamps = false;

    protected $fillable = [
        'id_promo',
        'id_restoran',
        'id_user',
        'jumlah_orang',
        'tanggal',
        'jam',
        // Kolom lain yang Anda inginkan di sini
    ];
}

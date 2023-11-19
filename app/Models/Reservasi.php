<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id_promo',
        'id_restoran',
        'id_user',
        'jumlah_orang',
        'tanggal',
        'jam',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_USER');
    }
}

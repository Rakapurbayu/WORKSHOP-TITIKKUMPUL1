<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi';
    protected $primaryKey = 'ID_REGIS';
    protected $fillable = ['ID_REGIS', 'ID_USER', 'TANGGAL_REGIS', 'USERNAME', 'PASSWORD', 'EMAIL'];
    public $timestamps = false;
}

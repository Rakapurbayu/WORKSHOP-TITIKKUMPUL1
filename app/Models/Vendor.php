<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor'; // Menyebutkan nama tabel yang terkait

    protected $fillable = [
        'title',
        'city',
        'description',
        'image_path',
    ];

    // Atau jika Anda ingin menggunakan guarded property
    // protected $guarded = [];

    // Tambahan relasi atau metode lain yang diperlukan bisa ditambahkan di sini

    // Contoh method untuk mendapatkan URL lengkap dari gambar
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }
}

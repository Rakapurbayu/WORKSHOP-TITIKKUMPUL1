<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumer extends Model
{
    use HasFactory;
    protected $table = 'konsumer';
    protected $primaryKey = 'ID_USER';
    public $timestamps = false;
}

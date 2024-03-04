<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahasaPemograman extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bahasa_pemograman'
    ];

    protected $table = 'bahasa_pemogramans';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_konsultasi', 'pengacara_id', 'nama', 'email', 'no_telp', 'detail_masalah'];
}

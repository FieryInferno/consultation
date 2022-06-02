<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
  use HasFactory;

  protected $fillable = ['pengacara_id', 'hari', 'jam'];

  public function pengacara()
  {
    return $this->hasOne(Pengacara::class, 'id', 'pengacara_id');
  }
}

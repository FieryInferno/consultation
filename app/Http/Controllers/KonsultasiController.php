<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class KonsultasiController extends Controller
{
  public function index()
  {
    return view('konsultasi', [
      'active'    => 'konsultasi',
      'title'     => 'Konsultasi',
      'pengacara' => Jadwal::where('hari', date('l'))->get(),
    ]);
  }
}

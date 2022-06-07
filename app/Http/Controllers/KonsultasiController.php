<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
  public function create()
  {
    return view('konsultasi', [
      'active'    => 'konsultasi',
      'title'     => 'Konsultasi',
      'pengacara' => Jadwal::where('hari', date('l'))->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'jenis_konsultasi'  => 'required',
      'pengacara_id'      => 'required',
      'nama'              => 'required',
      'email'             => 'required',
      'no_telp'           => 'required',
      'detail_masalah'    => 'required',
    ]);

    Konsultasi::create($request->all());

    return view('tipeKonsultasi', [
      'active'    => 'konsultasi',
      'title'     => 'Konsultasi',
    ]);
  }
}

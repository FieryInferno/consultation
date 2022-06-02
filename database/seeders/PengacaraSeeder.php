<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengacaraSeeder extends Seeder
{
  public function run()
  {
    DB::table('pengacaras')->insert([
      'nama'    => 'pengacara',
      'no_telp' => '082130426921',
    ]);
  }
}

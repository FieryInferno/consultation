<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('jadwals', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pengacara_id')->constrained('pengacaras')->onUpdate('cascade')->onDelete('cascade');
      $table->enum('hari', ['senin', 'selasa', 'rabu', 'kamis', 'jumat']);
      $table->string('jam');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('jadwals');
  }
};

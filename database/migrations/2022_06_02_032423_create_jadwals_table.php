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
      $table->enum('hari', ['Moday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']);
      $table->string('jam');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('jadwals');
  }
};

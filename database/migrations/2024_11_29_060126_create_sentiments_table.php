<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentimentsTable extends Migration
{
    public function up()
    {
        Schema::create('sentiments', function (Blueprint $table) {
            $table->id();
            $table->text('review');           // Kolom untuk menyimpan ulasan pelanggan
            $table->string('sentiment');      // Kolom untuk menyimpan hasil sentimen (positif, negatif, netral)
            $table->timestamps();             // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('sentiments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori');
            $table->text('deskripsi')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('kapasitas')->nullable();
            $table->text('persyaratan')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

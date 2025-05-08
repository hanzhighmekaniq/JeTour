<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('culinaries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nama kuliner
            $table->text('description'); // Deskripsi kuliner
            $table->text('address')->nullable(); // Alamat lokasi
            $table->time('open')->nullable(); // Jam operasional mulai
            $table->time('close')->nullable(); // Jam operasional tutup
            $table->integer('price')->nullable(); // Harga mulai dari
            $table->string('image')->nullable(); // Path file gambar
            $table->json('multiple_images')->nullable(); // Path file gambar
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('culinaries');
    }
};

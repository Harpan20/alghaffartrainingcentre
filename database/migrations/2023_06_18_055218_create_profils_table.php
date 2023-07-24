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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->text('deskripsi');
            $table->text('gambar');
            $table->string('alamat');
            $table->string('link_alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('tiktok');
            $table->string('linkedin');
            $table->string('no_whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};

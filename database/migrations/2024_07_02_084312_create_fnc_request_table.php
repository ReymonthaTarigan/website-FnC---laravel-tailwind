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
        Schema::create('fnc_request', function (Blueprint $table) {
            $table->id('id_request'); // Primary key with auto increment
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_whatsapp');
            $table->string('jenis_proyek');
            $table->text('deskripsi_proyek');
            $table->date('deadline');
            $table->string('design_confirm');
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fnc_request');
    }
};

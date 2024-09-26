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
            $table->string('fname');
            $table->string('email');
            $table->string('phone');
            $table->string('instansi');
            $table->string('project_type')->nullable();
            $table->string('other_project')->nullable();
            $table->text('project_desc');
            $table->decimal('cost', 10, 2);
            $table->date('deadline');
            $table->string('project_status');
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

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
        Schema::dropIfExists('users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->timestamps();
        });
    }
};

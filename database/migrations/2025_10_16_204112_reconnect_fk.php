<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user', function ($table) {
            // Tambah kolom sementara UUID
            $table->uuid('kelas_id_temp')->nullable();
        });

        // Kalau mau bisa isi NULL dulu, nanti data bisa disesuaikan manual
        // Atau jika mau copy dari mapping lama, bisa pakai update statement di sini

        // Hapus kolom lama dan rename
        Schema::table('user', function ($table) {
            $table->dropColumn('kelas_id');
            $table->renameColumn('kelas_id_temp', 'kelas_id');
        });
    }

    public function down(): void
    {
        Schema::table('user', function ($table) {
            $table->bigInteger('kelas_id')->nullable();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']); // drop FK sementara
        });

        // Kalau ada tabel lain seperti user (tanpa s)
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1️⃣ Map user.kelas_id lama ke UUID dari kelas.id
        // Asumsikan sebelumnya ada kolom sementara kelas.old_id atau kita bisa manual mapping
        // Contoh: jika old_id tidak ada, manual sesuaikan user.kelas_id sesuai data yang valid
        // Jika tidak ada data, bisa biarkan NULL

        // 2️⃣ Buat foreign key
        Schema::table('user', function ($table) {
            $table->foreign('kelas_id')
                  ->references('id')
                  ->on('kelas')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('user', function ($table) {
            $table->dropForeign(['kelas_id']);
        });
    }
};

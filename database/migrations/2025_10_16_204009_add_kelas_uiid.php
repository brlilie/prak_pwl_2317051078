<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Add temporary UUID column
        Schema::table('kelas', function ($table) {
            $table->uuid('uuid_temp')->nullable();
        });

        // Fill it with UUIDs
        DB::table('kelas')->update(['uuid_temp' => DB::raw('gen_random_uuid()')]);

        // Drop old primary key
        Schema::table('kelas', function ($table) {
            $table->dropPrimary(['id']);
        });

        // Drop old id column
        Schema::table('kelas', function ($table) {
            $table->dropColumn('id');
        });

        // Rename temp column to id
        Schema::table('kelas', function ($table) {
            $table->renameColumn('uuid_temp', 'id');
            $table->primary('id');
        });
    }

    public function down(): void
    {
        Schema::table('kelas', function ($table) {
            $table->dropPrimary(['id']);
        });

        Schema::table('kelas', function ($table) {
            $table->bigIncrements('id')->first();
        });
    }
};

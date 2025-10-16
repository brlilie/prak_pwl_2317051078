<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user', function ($table) {
            $table->uuid('uuid_temp')->nullable();
        });

        DB::table('user')->update(['uuid_temp' => DB::raw('gen_random_uuid()')]);

        Schema::table('user', function ($table) {
            $table->dropPrimary(['id']);
        });

        Schema::table('user', function ($table) {
            $table->dropColumn('id');
        });

        Schema::table('user', function ($table) {
            $table->renameColumn('uuid_temp', 'id');
        });

        Schema::table('user', function ($table) {
            $table->primary('id');
        });
    }

    public function down(): void
    {
        
        Schema::table('user', function ($table) {
            $table->dropPrimary(['id']);
        });

        Schema::table('user', function ($table) {
            $table->bigIncrements('id')->first();
        });
    }
};

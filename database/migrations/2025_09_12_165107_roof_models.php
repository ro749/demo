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
        DB::table('models')->insert([
            ['name' => 'ROOF TOP 1'],
            ['name' => 'ROOF TOP 2'],
            ['name' => 'ROOF TOP 3'],
            ['name' => 'ROOF TOP 4'],
            ['name' => 'ROOF TOP 5'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

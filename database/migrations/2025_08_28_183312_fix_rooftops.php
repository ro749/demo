<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('units')->where('unit', '1')->update(['unit' => 'ROOF TOP 1']);
        DB::table('units')->where('unit', '2')->update(['unit' => 'ROOF TOP 2']);
        DB::table('units')->where('unit', '3')->update(['unit' => 'ROOF TOP 3']);
        DB::table('units')->where('unit', '4')->update(['unit' => 'ROOF TOP 4']);
        DB::table('units')->where('unit', '5')->update(['unit' => 'ROOF TOP 5']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

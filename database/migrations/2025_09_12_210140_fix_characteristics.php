<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('characteristics')
        ->where('text', '2 Baños completo')
        ->update(['text' => '2 Baños completos']);
        DB::table('characteristics')
        ->where('text', '1 Balcon')
        ->update(['text' => '1 Balcón']);
    }

};

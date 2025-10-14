<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('plans')->insert([
            'id' => 2,
            'title' => 'PLAN 30/70',
            'discount' => '4',
        ]);
        DB::table('plans')->insert([
            'id' => 3,
            'title' => 'PLAN 20/20/60',
            'discount' => '5',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('plans')->insert([
            'id' => 4,
            'title' => 'PLAN 50/50',
            'discount' => '7',
        ]);
        DB::table('plans')->insert([
            'id' => 5,
            'title' => 'CONTADO DIFERIDO',
            'discount' => '9',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('plans')->insert([
            'id' => 6,
            'title' => 'CONTADO',
            'discount' => '12',
        ]);
    }
};

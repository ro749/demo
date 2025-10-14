<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('apartado');
        });
        DB::table('plans')->truncate();
        DB::table('planlines')->truncate();

        DB::table('plans')->insert([
            'title' => 'PLAN 5/10/85',
            'discount' => '0',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('plans')->insert([
            'title' => 'PLAN 30/70',
            'discount' => '4',
        ]);
        DB::table('plans')->insert([
            'title' => 'PLAN 20/20/60',
            'discount' => '5',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('plans')->insert([
            'title' => 'PLAN 50/50',
            'discount' => '7',
        ]);
        DB::table('plans')->insert([
            'title' => 'CONTADO DIFERIDO',
            'discount' => '9',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('plans')->insert([
            'title' => 'CONTADO',
            'discount' => '12',
        ]);

        DB::table('planlines')->insert(['plan' => 1, 'description' => 'ENGANCHE', 'percent' => '5']);
        DB::table('planlines')->insert(['plan' => 1, 'description' => 'PLAZO', 'percent' => '10','months' => 1]);
        DB::table('planlines')->insert(['plan' => 1, 'description' => 'PAGO AL FINAL', 'percent' => '85']);
        DB::table('planlines')->insert(['plan' => 2, 'description' => 'ENGANCHE', 'percent' => '30']);
        DB::table('planlines')->insert(['plan' => 2, 'description' => 'PAGO AL FINAL', 'percent' => '70']);
        DB::table('planlines')->insert(['plan' => 3, 'description' => 'ENGANCHE', 'percent' => '20']);
        DB::table('planlines')->insert(['plan' => 3, 'description' => 'PLAZO', 'percent' => '20','months' => 1]);
        DB::table('planlines')->insert(['plan' => 3, 'description' => 'PAGO AL FINAL', 'percent' => '60']);
        DB::table('planlines')->insert(['plan' => 4, 'description' => 'ENGANCHE', 'percent' => '50']);
        DB::table('planlines')->insert(['plan' => 4, 'description' => 'PAGO AL FINAL', 'percent' => '50']);
        DB::table('planlines')->insert(['plan' => 5, 'description' => 'ENGANCHE', 'percent' => '60']);
        DB::table('planlines')->insert(['plan' => 5, 'description' => 'PLAZO', 'percent' => '30','months' => 1]);
        DB::table('planlines')->insert(['plan' => 5, 'description' => 'PAGO AL FINAL', 'percent' => '10']);
        DB::table('planlines')->insert(['plan' => 6, 'description' => 'ENGANCHE', 'percent' => '90']);
        DB::table('planlines')->insert(['plan' => 6, 'description' => 'PAGO AL FINAL', 'percent' => '10']);
        
        
    }
};

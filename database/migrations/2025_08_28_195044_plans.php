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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('discount', 5, 2);
            $table->decimal('apartado', 12, 2);
            $table->date('final_date')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
        Schema::create('planlines', function (Blueprint $table) {
            $table->id();
            $table->integer('plan');
            $table->string('description');
            $table->decimal('percent', 5, 2);
            $table->boolean('months')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        
        DB::table('plans')->insert([
            'title' => '100% CONTADO  12% Descuento',
            'discount' => '12',
            'apartado' => '30000'
        ]);
        DB::table('plans')->insert([
            'title' => '50% CONTADO 6% Descuento',
            'discount' => '6',
            'apartado' => '30000'
        ]);
        DB::table('plans')->insert([
            'title' => '30% CONTADO 3.5% Descuento',
            'discount' => '3.5',
            'apartado' => '30000'
        ]);
        DB::table('plans')->insert([
            'title' => 'FINANCIAMIENTO A MSI',
            'discount' => '0',
            'apartado' => '30000',
            'final_date' => date('2027-07-31')
        ]);
        DB::table('planlines')->insert([
            'plan' => 1,
            'description' => 'ENGANCHE',
            'percent' => '90'
        ]);
        DB::table('planlines')->insert([
            'plan' => 1,
            'description' => 'PAGO AL FINAL',
            'percent' => '10'
        ]);
        DB::table('planlines')->insert([
            'plan' => 2,
            'description' => 'ENGANCHE',
            'percent' => '50'
        ]);
        DB::table('planlines')->insert([
            'plan' => 2,
            'description' => 'PAGO AL FINAL',
            'percent' => '50'
        ]);
        DB::table('planlines')->insert([
            'plan' => 3,
            'description' => 'ENGANCHE',
            'percent' => '30'
        ]);
        DB::table('planlines')->insert([
            'plan' => 3,
            'description' => 'PAGO AL FINAL',
            'percent' => '70'
        ]);
        DB::table('planlines')->insert([
            'plan' => 4,
            'description' => 'ENGANCHE',
            'percent' => '5'
        ]);
        DB::table('planlines')->insert([
            'plan' => 4,
            'description' => 'PLAZO',
            'percent' => '10',
            'months' => 1
        ]);
        DB::table('planlines')->insert([
            'plan' => 4,
            'description' => 'PAGO AL FINAL',
            'percent' => '85'
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

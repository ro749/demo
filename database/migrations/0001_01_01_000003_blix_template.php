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
        Schema::create('asesors', function (Blueprint $table) {
            $table->id();
            $table->string('number',4);
            $table->string('password');
            $table->string('phone', 10);
            $table->string('mail');
            $table->string('name');
            $table->integer('category');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 10);
            $table->string('mail');
            $table->integer('asesor');
            $table->integer('category')->default(0);
            $table->integer('priority')->default(0);
            $table->string('short_comment')->default('');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->integer('client');
            $table->integer('medium');
            $table->integer('asesor');
            $table->integer('unit');
            $table->integer('status');
            $table->decimal('quoted_price', 12, 2);
            $table->integer('n_open');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->integer('asesor')->default(0);
            $table->integer('client')->default(0);
            $table->string('unit',32);
            $table->integer('status')->default(0);
            $table->decimal('price', 12, 2);
            $table->decimal('final_price', 12, 2)->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('loocked');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};

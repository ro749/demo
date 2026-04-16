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
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->decimal('fill_enganche',12,2)->default(0);
            $table->decimal('fill_plazo',12,2)->default(0);
        });
        
    }
};

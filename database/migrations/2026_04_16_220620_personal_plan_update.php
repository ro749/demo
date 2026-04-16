<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->renameColumn('per_0','per_enganche');
            $table->renameColumn('per_1','per_plazo');
            $table->decimal('per_discount',5,2)->default(0);
            $table->integer('fill_months_plazo')->default(0);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->dropColumn('fill_0');
            $table->dropColumn('fill_1');
        });
    }
};

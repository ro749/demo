<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clients',function (Blueprint $table) {
            $table->unsignedBigInteger('asesor_id')->change();
        });

        Schema::table('quotations',function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->change();
            $table->unsignedBigInteger('unit_id')->change();
            $table->unsignedBigInteger('asesor_id')->change();
        });

        Schema::table('units',function (Blueprint $table) {
            $table->unsignedBigInteger('asesor_id')->change();
            $table->unsignedBigInteger('client_id')->change();
        });

        Schema::table('plan_lines',function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id')->change();
        });

        Schema::table('personal_plans',function (Blueprint $table) {
            $table->unsignedBigInteger('quotation_id')->change();
        });
    }
};

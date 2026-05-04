<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clients',function (Blueprint $table) {
            $table->renameColumn('asesor','asesor_id');
        });

        Schema::table('quotations',function (Blueprint $table) {
            $table->renameColumn('client','client_id');
            $table->renameColumn('unit','unit_id');
            $table->renameColumn('asesor','asesor_id');
        });

        Schema::table('units',function (Blueprint $table) {
            $table->renameColumn('asesor','asesor_id');
            $table->renameColumn('client','client_id');
        });

        Schema::table('plan_lines',function (Blueprint $table) {
            $table->renameColumn('plan','plan_id');
        });

        Schema::table('personal_plans',function (Blueprint $table) {
            $table->renameColumn('quotation','quotation_id');
        });
    }
};

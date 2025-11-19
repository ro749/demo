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
        Schema::create('personal_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('quotation');
            $table->decimal('per_0',5,2)->default(0);
            $table->decimal('fill_0',12,2)->default(0);
            $table->decimal('per_1',5,2)->default(0);
            $table->decimal('fill_1',12,2)->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }
};

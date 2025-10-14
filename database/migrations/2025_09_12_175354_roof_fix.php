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
        for ($i = 6; $i <= 10; $i++) {
            DB::table('characteristics')->where('model', $i)->delete();
        }

        for ($i = 6; $i <= 10; $i++) {
            DB::table('characteristics')->insert([
                ['model' => $i, 'text' => 'Cocina', 'icon' => 'Cocina'],
                ['model' => $i, 'text' => '1/2 Baño', 'icon' => 'Baño'],
            ]);
        }
    }
};

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
            DB::table('characteristics')->insert([
                ['model' => $i, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
                ['model' => $i, 'text' => 'Cocina', 'icon' => 'Cocina'],
                ['model' => $i, 'text' => 'Barra', 'icon' => 'Barra'],
                ['model' => $i, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
                ['model' => $i, 'text' => 'Recámara Secundaria', 'icon' => 'Recámara%20Secundaria'],
                ['model' => $i, 'text' => '1 y 1/2 Baño', 'icon' => 'Baño'],
                ['model' => $i, 'text' => 'Lavandería', 'icon' => 'Lavandería'],
                ['model' => $i, 'text' => '1 Balcon', 'icon' => 'Balcón'],
            ]);
        }
    }
};

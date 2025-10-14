<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->integer('model');
            $table->string('text');
            $table->string('icon');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('characteristics')->insert([
            ['model' => 1, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
            ['model' => 1, 'text' => 'Cocina', 'icon' => 'Cocina'],
            ['model' => 1, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
            ['model' => 1, 'text' => '1 y 1/2 Baño', 'icon' => 'Baño'],
            ['model' => 1, 'text' => 'Lavandería', 'icon' => 'Lavandería'],

            ['model' => 2, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
            ['model' => 2, 'text' => 'Cocina', 'icon' => 'Cocina'],
            ['model' => 2, 'text' => 'Barra', 'icon' => 'Barra'],
            ['model' => 2, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
            ['model' => 2, 'text' => 'Baño completo', 'icon' => 'Baño'],
            ['model' => 2, 'text' => 'Lavandería', 'icon' => 'Lavandería'],

            ['model' => 3, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
            ['model' => 3, 'text' => 'Cocina', 'icon' => 'Cocina'],
            ['model' => 3, 'text' => 'Barra', 'icon' => 'Barra'],
            ['model' => 3, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
            ['model' => 3, 'text' => 'Recámara Secundaria', 'icon' => 'Recámara%20Secundaria'],
            ['model' => 3, 'text' => '2 Baños completo', 'icon' => 'Baño'],
            ['model' => 3, 'text' => 'Lavandería', 'icon' => 'Lavandería'],

            ['model' => 4, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
            ['model' => 4, 'text' => 'Cocina', 'icon' => 'Cocina'],
            ['model' => 4, 'text' => 'Barra', 'icon' => 'Barra'],
            ['model' => 4, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
            ['model' => 4, 'text' => 'Recámara Secundaria', 'icon' => 'Recámara%20Secundaria'],
            ['model' => 4, 'text' => '2 Baños completo', 'icon' => 'Baño'],
            ['model' => 4, 'text' => 'Lavandería', 'icon' => 'Lavandería'],
            ['model' => 4, 'text' => '2 Balcones', 'icon' => 'Balcón'],

            ['model' => 5, 'text' => 'Sala/Comedor', 'icon' => 'Sala_Comedor'],
            ['model' => 5, 'text' => 'Cocina', 'icon' => 'Cocina'],
            ['model' => 5, 'text' => 'Barra', 'icon' => 'Barra'],
            ['model' => 5, 'text' => 'Recámara Principal Vestidor', 'icon' => 'Recámara%20Principal%20Vestidor'],
            ['model' => 5, 'text' => 'Recámara Secundaria', 'icon' => 'Recámara%20Secundaria'],
            ['model' => 5, 'text' => '2 Baños completo', 'icon' => 'Baño'],
            ['model' => 5, 'text' => 'Lavandería', 'icon' => 'Lavandería'],
            ['model' => 5, 'text' => '1 Balcon', 'icon' => 'Balcón'],
        ]);
    }

};

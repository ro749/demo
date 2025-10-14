<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('models')->insert([
            ['name' => 'LYRA'],
            ['name' => 'NOVA'],
            ['name' => 'AURA'],
            ['name' => 'LUA'],
            ['name' => 'LUA II'],
        ]);

        DB::table('units')
        ->join('models', 'models.name', '=', 'units.modelo')
        ->update([
            'units.modelo' => DB::raw('models.id')
        ]);
    }
};

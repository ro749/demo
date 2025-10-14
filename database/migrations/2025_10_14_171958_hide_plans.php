<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        echo 'Hiding plans' . PHP_EOL;
        $sql = DB::table('plans')->where('id', '!=', 1)->toSql();
        echo $sql . PHP_EOL;
        $sql = DB::table('plans')->where('id', '!=', 1)->delete();
    }
};

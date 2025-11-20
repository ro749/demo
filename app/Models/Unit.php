<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;
use Illuminate\Support\Facades\DB;
class Unit extends Model
{
    static function get(string $column, string $id)
    {
        $unit = DB::table('units')->where($column, $id)->first();
        $unit->characteristics = DB::table('characteristics')->select('text', 'icon')->where('model', '=', $unit->modelo)->get();
        $unit->modelo = DB::table('models')->where('id', '=', $unit->modelo)->first()->name;
        if ($unit->modelo == $unit->unit) {
            $unit->unit = "";
        }
        return $unit;
    }
    protected $fillable = ['asesor', 'client', 'unit', 'status', 'price', 'final_price', 'm2', 'modelo', 'rec', 'baños', 'cajones', 'vista', 'sale_date', 'new_status', 'new_price'];
}
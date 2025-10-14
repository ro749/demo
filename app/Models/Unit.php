<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
class Unit extends Model
{
    static function get(string $column,string $id){
        $unit = DB::table('units')->where($column,$id)->first();
        $unit->characteristics = DB::table('characteristics')->select('text','icon')->where('model','=',$unit->modelo)->get();
        $unit->modelo = DB::table('models')->where('id','=',$unit->modelo)->first()->name;
        if($unit->modelo == $unit->unit){
            $unit->unit = "";
        }
        return $unit;
    }
}

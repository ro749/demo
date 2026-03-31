<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;
use Illuminate\Support\Facades\DB;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
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

    protected static function allColumns(): array
    {
        return [
            'unit'=>new Column(
                display:"Unidad",
            ),
            'modelo'=>new Column(
                display:"Modelo",
                logic_modifier: new ForeignKey(
                    table: 'models',
                    column: 'name',
                )
            ),
            'm2'=>new Column(
                display:"M2",
                modifier: Modifier::METERS,
            ),
            'rec'=>new Column(
                display:"Recamaras",
            ),
            'baños'=>new Column(
                display:"Baños",
            ),
            'cajones'=>new Column(
                display:"Cajones",
            ),
            'vista'=>new Column(
                display:"Vista",
            ),
            'price'=>new Column(
                display:"Precio",
                modifier: Modifier::MONEY,
            ),
            'status'=>new Column(
                display:"Estado",
                logic_modifier: new Options (options: OptionsEnum::UnitsStatus),
            ),
        ];
    }
    protected $fillable = ['asesor', 'client', 'unit', 'status', 'price', 'final_price', 'm2', 'modelo', 'rec', 'baños', 'cajones', 'vista', 'sale_date', 'new_status', 'new_price'];
}
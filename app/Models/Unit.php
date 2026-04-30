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
    public static function allColumns(): array
    {
        return [
            'unit'=>new Column(
                display:"Unidad",
                modifier: null,
            ),
            'modelo'=>new Column(
                display:"Modelo",
                logic_modifier: new ForeignKey(
                    table: 'models',
                    column: 'name',
                ),
                modifier: null,
            ),
            'm2'=>new Column(
                display:"M2",
                modifier: Modifier::METERS,
            ),
            'rec'=>new Column(
                display:"Recamaras",
                modifier: null,
            ),
            'baños'=>new Column(
                display:"Baños",
                modifier: null,
            ),
            'cajones'=>new Column(
                display:"Cajones",
                modifier: null,
            ),
            'vista'=>new Column(
                display:"Vista",
                modifier: null,
            ),
            'price'=>new Column(
                display:"Precio",
                modifier: Modifier::MONEY,
            ),
            'status'=>new Column(
                display:"Estado",
                logic_modifier: new Options (options: OptionsEnum::UnitsStatus),
                modifier: null,
            ),
        ];
    }
    protected $fillable = ['asesor', 'client', 'unit', 'status', 'price', 'final_price', 'm2', 'modelo', 'rec', 'baños', 'cajones', 'vista', 'sale_date', 'new_status', 'new_price'];
}
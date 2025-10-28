<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\FullListingTemplate\Enums\Options as OptionsEnum;
use Ro749\FullListingTemplate\Tables\TorreAdmin as BaseTable;
class TorreAdmin extends BaseTable
{
    public function __construct(){
        parent::__construct();
        $this->getter->columns = [
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
}
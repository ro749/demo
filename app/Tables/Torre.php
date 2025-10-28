<?php

namespace App\Tables;

use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Ro749\SharedUtils\Tables\Texts\TableTexts;
use App\Enums\UnitsStatus;
use Illuminate\Database\Query\Builder;
use Ro749\FullListingTemplate\Tables\Torre as BaseTable;
class Torre extends BaseTable
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
        ];
    }
}
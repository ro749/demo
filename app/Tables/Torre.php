<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Ro749\SharedUtils\Tables\Texts\TableTexts;
use App\Enums\UnitsStatus;
use Illuminate\Database\Query\Builder;
class Torre extends BaseTable
{
    public function __construct(){
        parent::__construct(
            page_length: 50,
            view: new View(
                url: route('view-asesor'),
                param: 'id',
                name: 'id',
                full_row: true
            ),
            texts: new TableTexts(
                lengthMenu: '_MENU_  &nbsp;Departamentos por página',
                info: 'Mostrando _START_ a _END_ de _TOTAL_ Departamentos Disponibles',
            ),
            getter: new ArrayGetter(
                table: 'units',
                columns : [
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
                ],
                filters: [],
                backend_filters: [
                    new BasicFilter(
                        id:'status',
                        filter: function (Builder $query,$data) {
                            return $query->where('status', '=', UnitsStatus::Disponible->value);
                        }
                    ),
                ]
            )
        );
    }

    protected static ?Torre $instance = null;

    public static function instance(): Torre
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
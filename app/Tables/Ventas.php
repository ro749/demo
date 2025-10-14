<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use App\Enums\Options as OptionsEnum;
use App\Forms\VentaEdit;
use App\Enums\UnitsStatus;
class Ventas extends BaseTable
{
    public function __construct(){
        parent::__construct(
            form: VentaEdit::instanciate(),
            getter: new ArrayGetter(
                table: 'units',
                columns : [
                    'unit'=>new Column(
                        display:"Unidad",
                    ),
                    'final_price'=>new Column(
                        display:"Precio Final",
                        modifier: Modifier::MONEY,
                    ),
                    'asesor'=>new Column(
                        display:"Asesor",
                        logic_modifier: new ForeignKey(
                            table: 'asesors',
                            column: 'name',
                        )
                    ),
                    'client'=>new Column(
                        display:"Cliente",
                        logic_modifier: new ForeignKey(
                            table: 'clients',
                            column: 'name',
                        )
                    ),
                    'sale_date'=>new Column(
                        display:"Fecha de venta",
                        modifier: Modifier::DATE,
                    ),
                ],
                filters: [
                    new BasicFilter(
                        id:'status',
                        filter: function ($query,$data) {
                            return $query->where('status', '=', UnitsStatus::Vendido->value);
                        }
                    ),
                ],
                backend_filters: []
            ),
        );
    }

    protected static ?Ventas $instance = null;

    public static function instance(): Ventas
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
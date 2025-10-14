<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\SharedUtils\Tables\ColumnOrder;
use App\Enums\Options as OptionsEnum;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Illuminate\Database\Query\Builder;
use Ro749\SharedUtils\Tables\View;
use App\Forms\QuotationEdit;
class ClientProfileTable extends BaseTable
{
    public function __construct(){
        parent::__construct(
            view: new View(
                url: route('client-view'),
                param: 'id',
                name: 'id'
            ),
            form: QuotationEdit::instanciate(),
            getter: new ArrayGetter(
                table: 'quotations',
                columns : [
                    'unit'=>new Column(
                        display:"Unidad",
                        logic_modifier: new ForeignKey(
                            table: 'units',
                            column: 'unit',
                        )
                    ),
                    'quoted_price'=>new Column(
                        display:"Precio Cotizado",
                        modifier: Modifier::MONEY,
                    ),
                    'actual_price'=>new Column(
                        display:"Precio Actual",
                        modifier: Modifier::MONEY,
                        logic_modifier: new ForeignKey(
                            table: 'units',
                            column: 'price',
                        )
                    ),
                    'created_at'=>new Column(
                        display:"Fecha",
                        modifier: Modifier::DATE,
                        order: ColumnOrder::DESC
                    ),
                    'status'=>new Column(
                        display:"Status",
                        logic_modifier: new Options(
                            options: OptionsEnum::QuotationStatus
                        )
                    ),
                    'n_open'=>new Column(
                        display:"Vistas",
                    )
                ],
                filters: [],
                backend_filters: [
                    new BasicFilter(
                        id: "id",
                        filter: function(Builder $query,array $data) {
                            $query->where('quotations.client', $data['id']);
                        }
                    )
                ]
            )
        );
    }

    protected static ?BaseTable $instance = null;

    public static function instance(): BaseTable
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
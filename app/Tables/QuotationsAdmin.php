<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Tables\ColumnOrder;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Tables\Delete;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\MultiForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\ForeingKeyColumn;
use Ro749\SharedUtils\Models\LogicModifiers\ForeingKeyValue;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use App\Enums\Options as OptionsEnum;
use App\Forms\QuotationEdit;
class QuotationsAdmin extends BaseTable
{
    public function __construct(){
        parent::__construct(
            getter: new ArrayGetter(
                table: 'quotations',
                columns : [
                    'client'=>new Column(
                        display:"Cliente",
                        logic_modifier: new ForeignKey(
                            table: 'clients',
                            column: 'name',
                        )
                    ),
                    'medium' => new Column(
                        display:"Medio",
                        logic_modifier: new MultiForeignKey (
                            key_column: "client",
                            table: "clients",
                            columns: [
                                new ForeingKeyColumn("phone"),
                                new ForeingKeyColumn("mail"),
                                new ForeingKeyValue("Link")
                            ],
                        ),
                    ),
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
                    'asesor'=>new Column(
                        display:"Asesor",
                        logic_modifier: new ForeignKey(
                            table: 'asesors',
                            column: 'name',
                        )
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
                backend_filters: [],
            ),
            view: new View(
                url: route('client-view'),
                param: 'id',
                name: 'id'
            ),
            delete: new Delete(warning:"Quieres eliminar la cotización de {asesor} a {client} de la unidad {unit}?"),

            form: QuotationEdit::instanciate(),

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
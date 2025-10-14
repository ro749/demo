<?php

namespace App\Tables;

use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use App\Enums\Options as OptionsEnum;
use App\Forms\UnitEdit;
class TorreAdmin extends BaseTable
{
    public function __construct(){
        parent::__construct(
            form: UnitEdit::instanciate(),
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
                    'status'=>new Column(
                        display:"Estado",
                        logic_modifier: new Options (options: OptionsEnum::UnitsStatus),
                    ),
                ],
                filters: [],
                backend_filters: []
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
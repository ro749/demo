<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;
use App\Enums\Options as OptionsEnum;

class VentaEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "units",
            submit_text: "",
            fields: [
                'final_price' => new FormField(
                    type: InputType::NUMBER,
                ),
                'asesor' => Selector::fromDB(
                    id: 'asesor',
                    table: 'asesors',
                    label_column: 'name',
                ),
                'client'=>Selector::fromDB(
                    id: 'client',
                    table: 'clients',
                    label_column: 'name',
                    hot_reload: route('clients-asesor')
                ),
                'sale_date' => new FormField(
                    type: InputType::DATE,
                ),
            ],
        );
    }
    protected static ?VentaEdit $instance = null;

    public static function instanciate(): VentaEdit
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;
use App\Enums\Options as OptionsEnum;

class UnitEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "units",
            submit_text: "",
            fields: [
                'm2' => new FormField(
                    type: InputType::NUMBER,
                ),
                'price' => new FormField(
                    type: InputType::NUMBER,
                ),
                'status' => new Selector(
                    options: OptionsEnum::UnitsStatus
                )
            ],
        );
    }
    protected static ?UnitEdit $instance = null;

    public static function instanciate(): UnitEdit
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

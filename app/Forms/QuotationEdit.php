<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;
use App\Enums\Options as OptionsEnum;
class QuotationEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "quotations",
            submit_text: "",
            fields: [
                'status' => new Selector(
                    options: OptionsEnum::QuotationStatus
                )
            ],
        );
    }
    protected static ?QuotationEdit $instance = null;

    public static function instanciate(): QuotationEdit
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

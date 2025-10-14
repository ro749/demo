<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use App\Models\User;
use App\Models\Client;
use App\Enums\Options as OptionsEnum;
class ClientEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "clients",
            submit_text: "",
            fields: [
                'name' => new FormField(
                    type: InputType::TEXT,
                ),
                'mail' => new FormField(
                    type: InputType::EMAIL,
                ),
                'phone' => new FormField(
                    type: InputType::PHONE,
                    rules: ["unique","required"]
                ),
                'short_comment' => new FormField(
                    type: InputType::TEXT,
                ),
                'category' => new Selector(
                    options: OptionsEnum::ClientCategories
                ),
                'priority' => new Selector(
                    options: OptionsEnum::ClientPriorities
                ),
            ],
        );
    }
    protected static ?ClientEdit $instance = null;

    public static function instanciate(): ClientEdit
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\TextArea;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;

class ClientComment extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "clients",
            submit_text: "guardar",
            reset: false,
            success_msg: "Comentario guardado exitosamente",
            fields: [
                'long_comment' => new TextArea(),
                'id' => new FormField(
                    type: InputType::HIDDEN,
                ),
            ],
        );
    }
    protected static ?ClientComment $instance = null;

    public static function instanciate(): ClientComment
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

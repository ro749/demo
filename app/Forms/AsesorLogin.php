<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\LoginForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;

class AsesorLogin extends LoginForm
{
    public function __construct()
    {
        parent::__construct(
            table: "users",
            submit_text: "Entrar",
            redirect: "/client-login",
            guard: "asesor",
            column_status: "status",
            fields: [
                "number" => new FormField(
                    type: InputType::TEXT,
                    placeholder:"Número de asesor", 
                    icon: "bx bx-user",
                    max_length: 4
                ),
                "password" => new FormField(
                    placeholder:"Nip",
                    type: InputType::PASSWORD,
                    icon: "bx bx-lock-alt",
                    max_length: 4
                ),
            ],
        );
    }
    protected static ?AsesorLogin $instance = null;

    public static function instanciate(): AsesorLogin
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

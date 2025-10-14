<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\LoginForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;

class AdminLogin extends LoginForm
{
    public function __construct()
    {
        parent::__construct(
            table: "users",
            submit_text: "Entrar",
            redirect: route('admin-torre'),
            fields: [
                "name" => new FormField(
                    placeholder:"Usuario",
                    type: InputType::TEXT, 
                    icon: "bx bx-user"
                ),
                "password" => new FormField(
                    placeholder:"Contraseña",
                    type: InputType::PASSWORD,
                    icon: "bx bx-lock-alt"
                ),
            ],
        );
    }
    protected static ?AdminLogin $instance = null;

    public static function instanciate(): AdminLogin
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

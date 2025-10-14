<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;

class RegisterClient extends BaseForm
{
    public function __construct($fields = [])
    {
        parent::__construct(
            table: "clients",
            submit_text: "Registrar",
            redirect: route('disponibilidad'),
            user: 'asesor',
            fields: [
                'name' => new FormField(
                    type: InputType::TEXT,
                    label: "Nombre",
                    placeholder: "Escriba el nombre",
                    rules: ["required"],
                    icon: "f7:person"
                ),
                'mail' => new FormField(
                    type: InputType::EMAIL,
                    label:"Email",
                    placeholder:"Escriba el email",
                    //rules: ["required"],
                    icon: "mage:email"
                ),
                'phone' => new FormField(
                    type: InputType::PHONE,
                    label:"Teléfono",
                    placeholder:"Escriba el teléfono",
                    rules: ["unique","required"],
                    icon: "solar:phone-calling-linear"
                )
            ]);
    }
    protected static ?RegisterClient $instance = null;

    public static function instanciate(): RegisterClient
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function after_process(int $id){
        session()->put('client_id', $id);
    }
}

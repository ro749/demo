<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use App\Enums\Options;
use Illuminate\Support\Facades\DB;
use App\Enums\AsesorStatus;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
class ResetPassword extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "asesors",
            submit_text: 'Confirmar',
            redirect: "/client-login",
            db_id: Auth::guard('asesor')->user()->id,
            fields: [
                "password" => new FormField(
                    placeholder:"Nuevo Nip",
                    type: InputType::PASSWORD,
                    icon: "bx bx-lock-alt",
                    max_length: 4
                ),
                "confirm_password" => new FormField(
                    placeholder:"Confirmar Nip",
                    type: InputType::PASSWORD,
                    icon: "bx bx-lock-alt",
                    max_length: 4
                ),
            ]
        );
    }

    public function before_process(array &$data)
    {
        if($data['password'] !== $data['confirm_password']){
            throw ValidationException::withMessages([
                'confirm_password' => ['Los Nips no coinciden.'],
            ]);
        }
        unset($data['confirm_password']);
        $data['reset'] = 0;
    }
    protected static ?ResetPassword $instance = null;

    public static function instanciate(): ResetPassword
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

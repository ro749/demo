<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use App\Enums\Options;
use App\Models\Asesor;
use Ro749\SharedUtils\Enums\Icon;

class RegisterAsesor extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "asesors",
            submit_text: 'Registrar',
            success_msg: 'Vendedor registrado exitosamente. El NIP por defecto es 0000.',
            fields: [
                'name'=>new FormField(
                    type: InputType::TEXT,
                    label: "Nombre",
                    placeholder: "Escriba el nombre",
                    rules: ["required"],
                    icon: Icon::USER->value
                ),
                'mail'=>new FormField(
                    type: InputType::EMAIL,
                    label:"Email",
                    placeholder:"Escriba el email",
                    rules: ["required"],
                    icon: Icon::EMAIL->value
                ),
                'phone'=>new FormField(
                    type: InputType::PHONE,
                    label:"Teléfono",
                    placeholder:"Escriba el teléfono",
                    rules: ["required"],
                    icon: Icon::PHONE->value
                ),
                'number'=>new FormField(
                    type: InputType::TEXT,
                    label:"Numero",
                    placeholder:"Escriba el numero",
                    rules: ["unique","required"],
                    icon: Icon::HASH->value
                ),
                'category'=>new Selector(
                    label:"Categoría",
                    placeholder:"Seleccione una categoría",
                    options: Options::AsesorCategories,
                    rules: ["required"],
                )
            ]
        );
    }

    public function before_process(array &$data)
    {
        $data['reset'] = 1;
    }
    protected static ?RegisterAsesor $instance = null;

    public static function instanciate(): RegisterAsesor
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

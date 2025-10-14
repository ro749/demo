<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\Selector;
use App\Enums\Options;
use Illuminate\Support\Facades\DB;
use App\Enums\AsesorStatus;
class EditAsesor extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "asesors",
            submit_text: 'Registrar',
            fields: [
                'name'=>new FormField(
                    type: InputType::TEXT,
                    label: "Nombre",
                    placeholder: "Escriba el nombre",
                    rules: ["required"],
                    icon: "f7:person"
                ),
                'mail'=>new FormField(
                    type: InputType::EMAIL,
                    label:"Email",
                    placeholder:"Escriba el email",
                    rules: ["required"],
                    icon: "mage:email"
                ),
                'phone'=>new FormField(
                    type: InputType::PHONE,
                    label:"Teléfono",
                    placeholder:"Escriba el teléfono",
                    rules: ["unique","required"],
                    icon: "solar:phone-calling-linear"
                ),
                'number'=>new FormField(
                    type: InputType::TEXT,
                    label:"Numero",
                    placeholder:"Escriba el numero",
                    rules: ["unique","required"],
                    icon: "solar:phone-calling-linear"
                ),
                'password'=>new FormField(
                    type: InputType::PASSWORD,
                    label:"Nip",
                    placeholder:"Escriba el nip",
                    rules: ["required"],
                    icon: "solar:lock-linear"
                ),
                'category'=>new Selector(
                    label:"Categoría",
                    options: Options::AsesorCategories,
                    rules: ["required"],
                ),
                'status'=>new Selector(
                    label:"Status",
                    options: Options::AsesorStatus,
                    rules: ["required"],
                ),
            ]
        );
    }

    public function after_process(int $id){
        $asesor = DB::table('asesors')->where('id', $id)->first();
        if($asesor->status == AsesorStatus::Inactivo->value){
            DB::table('sessions')
            ->where('user_id', $id)
            ->where('guard', 'asesor')
            ->delete();
        }
    }
    protected static ?EditAsesor $instance = null;

    public static function instanciate(): EditAsesor
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

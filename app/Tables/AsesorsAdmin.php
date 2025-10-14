<?php

namespace App\Tables;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use App\Enums\Options as OptionsEnum;
use App\Forms\EditAsesor;
use Ro749\SharedUtils\Tables\TableButtonAjax;
use Ro749\SharedUtils\Enums\Icon;
class AsesorsAdmin extends BaseTable
{
    public function __construct(){
        parent::__construct(
            getter: new ArrayGetter(
                table: 'asesors',
                columns : [
                    'name'=>new Column(
                        display:"Nombre",
                    ),
                    'mail'=>new Column(
                        display:"Email",
                    ),
                    'phone'=>new Column(
                        display:"Teléfono",
                    ),
                    'number'=>new Column(
                        display:"Numero",
                    ),
                    'category'=>new Column(
                        display:"Categoría",
                        logic_modifier: new Options(options: OptionsEnum::AsesorCategories),
                    ),
                    'status'=>new Column(
                        display:"Status",
                        logic_modifier: new Options(options: OptionsEnum::AsesorStatus),
                    ),
                ],
            ),
            form: EditAsesor::instanciate(),
            buttons: [
                new TableButtonAjax(
                    icon: Icon::RESTART,
                    button_class: "reset-btn",
                    background_color_class:"btn-primary-600",
                    text_color_class: "",
                    url: route("reset-password"),
                    warning: "Quieres restablecer la contraseña de {name}?",
                    success: "La contraseña provicional para {name} es 0000.",
                    reload: false
                )
            ]
        );
    }
    

    protected static ?BaseTable $instance = null;

    public static function instance(): BaseTable
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
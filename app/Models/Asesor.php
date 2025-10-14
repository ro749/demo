<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Ro749\SharedUtils\Models\ModelTrait;
use Ro749\SharedUtils\Models\Attribute;
use Ro749\SharedUtils\Models\Editable;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use App\Enums\Options as OptionsEnum;
class Asesor extends Authenticatable
{
    use ModelTrait;
    public function __construct()
    {
        $this->owner = "asesor";
        $this->attributes = [
            'name'=>new Attribute(
                label:"Nombre",
                placeholder:"Escriba el nombre",
                editable: Editable::ALLWAYS,
                rules: ["required"],
                icon: "f7:person"
            ),
            'mail'=>new Attribute(
                label:"Email",
                placeholder:"Escriba el email",
                editable: Editable::ALLWAYS,
                #rules: ["required"],
                icon: "mage:email"
            ),
            'phone'=>new Attribute(
                label:"Teléfono",
                placeholder:"Escriba el teléfono",
                editable: Editable::ALLWAYS,
                rules: ["required"],
                icon: "solar:phone-calling-linear"
            ),
            'number'=>new Attribute(
                label:"Numero",
                placeholder:"Escriba el numero",
                editable: Editable::ALLWAYS,
                rules: ["unique","required"],
                icon: "iconoir:hashtag"
            ),
            'password'=>new Attribute(
                label:"Nip",
                placeholder:"Escriba el Nip",
                editable: Editable::ALLWAYS,
                rules: ["required"],
                icon: "iconoir:key",
                encrypt: true
            ),
            'category'=>new Attribute(
                label:"Categoría",
                placeholder:"Seleccione una categoría",
                editable: Editable::ALLWAYS,
                rules: ["required"],
                logic_modifier: new Options(options: OptionsEnum::AsesorCategories),
            ),
        ];
    }
    protected $fillable = [
        'number',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

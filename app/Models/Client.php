<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Ro749\SharedUtils\Models\ModelTrait;
use Ro749\SharedUtils\Models\Attribute;
use Ro749\SharedUtils\Models\Editable;
use Ro749\SharedUtils\Models\LogicModifiers\ForeignKey;
use Ro749\SharedUtils\Models\LogicModifiers\Options;
use Ro749\SharedUtils\Models\LogicModifiers\Statistic;
use Ro749\SharedUtils\Models\StatisticType;
use App\Enums\Options as OptionsEnum;
class Client extends Model
{
    use ModelTrait;
    public string $owner;
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
                icon: "mage:email"
            ),
            'phone'=>new Attribute(
                label:"Teléfono",
                placeholder:"Escriba el teléfono",
                editable: Editable::ALLWAYS,
                rules: ["unique","required"],
                icon: "solar:phone-calling-linear"
            ),
            #'enviadas'=>new Attribute(
            #    label:"Enviadas",
            #    logic_modifier: new Statistic(
            #        statistic_type: StatisticType::COUNT,
            #        table: 'quotations',
            #        group_column: 'client',
            #        filter: 'status = 0'
            #    ),
            #),
            #'pendientes'=>new Attribute(
            #    label:"Pendientes",
            #    logic_modifier: new Statistic(
            #        statistic_type: StatisticType::COUNT,
            #        table: 'quotations',
            #        group_column: 'client',
            #        filter: 'status = 1'
            #    ),
            #),
            #'aceptadas'=>new Attribute(
            #    label:"Aceptadas",
            #    logic_modifier: new Statistic(
            #        statistic_type: StatisticType::COUNT,
            #        table: 'quotations',
            #        group_column: 'client',
            #        filter: 'status = 2'
            #    ),
            #),
            #"canceladas"=>new Attribute(
            #    label:"Canceladas",
            #    logic_modifier: new Statistic(
            #        statistic_type: StatisticType::COUNT,
            #        table: 'quotations',
            #        group_column: 'client',
            #        filter: 'status = 3'
            #    ),
            #),
            'category'=>new Attribute(
                label:"Categoría",
                logic_modifier: new Options (options: OptionsEnum::ClientCategories),
                editable: Editable::UPDATE,
            ),
            'priority'=>new Attribute(
                label:"Prioridad",
                logic_modifier: new Options (options: OptionsEnum::ClientPriorities),
                editable: Editable::UPDATE,
            ),
            'asesor'=>new Attribute(
                label:"Asesor",
                logic_modifier: new ForeignKey(
                    table: 'asesors',
                    column: 'name',
                ),
            ),
        ];
    }
}

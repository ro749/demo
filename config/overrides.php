<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
    ],
    'forms' => [
    ],
    'models' => [
        'PersonalPlan' => App\Models\PersonalPlan::class,
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'datas' => [
        'UnitData' => App\Data\UnitData::class,
    ],
    'controllers' => [
    ],
    'views' => [
        'characteristic' => 'characteristic',
        'client-login' => 'client-login',
        'disponibilidad' => 'disponibilidad',
        'head' => 'head',
        'header-asesor' => 'header-asesor',
        'header' => 'header',
        'mail-body' => 'mail-body',
        'simple-login' => 'simple-login',
        'unavailable' => 'unavailable',
    ],
];

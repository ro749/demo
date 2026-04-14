<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
    ],
    'forms' => [
        'TestForm' => App\Forms\TestForm::class,
    ],
    'models' => [
        'PersonalPlan' => App\Models\PersonalPlan::class,
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'data' => [
    ],
    'controllers' => [
    ],
    'views' => [
        'client-login' => 'client-login',
        'disponibilidad' => 'disponibilidad',
        'head' => 'head',
        'header-asesor' => 'header-asesor',
        'header' => 'header',
        'mail-body' => 'mail-body',
        'simple-login' => 'simple-login',
        'test' => 'test',
        'unavailable' => 'unavailable',
    ],
];

<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
    ],
    'forms' => [
    ],
    'models' => [
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'controllers' => [
    ],
    'views' => [
        'client-login' => 'client-login',
        'disponibilidad' => 'disponibilidad',
        'head' => 'head',
        'header-admin' => 'header-admin',
        'header-asesor' => 'header-asesor',
        'header' => 'header',
        'mail-body' => 'mail-body',
        'simple-login' => 'simple-login',
        'title' => 'title',
        'unavailable' => 'unavailable',
    ],
    'plans' => App\Plans\Plans::class,
];

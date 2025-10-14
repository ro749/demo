<?php

return [
    'tables' => [
        'AsesorsAdmin' => App\Tables\AsesorsAdmin::class,
        'ClientProfileTable' => App\Tables\ClientProfileTable::class,
        'Clients' => App\Tables\Clients::class,
        'ClientsAdmin' => App\Tables\ClientsAdmin::class,
        'Profile' => App\Tables\Profile::class,
        'ProfileAdmin' => App\Tables\ProfileAdmin::class,
        'Quotations' => App\Tables\Quotations::class,
        'QuotationsAdmin' => App\Tables\QuotationsAdmin::class,
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
        'Ventas' => App\Tables\Ventas::class,
    ],
    'forms' => [
        'AdminLogin' => App\Forms\AdminLogin::class,
        'AsesorLogin' => App\Forms\AsesorLogin::class,
        'ClientComment' => App\Forms\ClientComment::class,
        'ClientEdit' => App\Forms\ClientEdit::class,
        'EditAsesor' => App\Forms\EditAsesor::class,
        'ProfileImageEdit' => App\Forms\ProfileImageEdit::class,
        'QuotationEdit' => App\Forms\QuotationEdit::class,
        'RegisterAsesor' => App\Forms\RegisterAsesor::class,
        'RegisterClient' => App\Forms\RegisterClient::class,
        'ResetPassword' => App\Forms\ResetPassword::class,
        'SelectClient' => App\Forms\SelectClient::class,
        'UnitEdit' => App\Forms\UnitEdit::class,
        'VentaEdit' => App\Forms\VentaEdit::class,
    ],
    'models' => [
        'Asesor' => App\Models\Asesor::class,
        'Client' => App\Models\Client::class,
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'plans' =>  App\Plans\Plans::class,
    'image_map_pro' => App\ImageMapPro\ImageMapPro::class,
    'sender'=>App\Senders\CotizationSender::class
];

<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::capture();
$kernel->handle($request);

if (!$app->make('auth')->check()) {
    header('Location: /login');
    exit;
}

function adminer_object() {
    class AdminerCustom extends Adminer {
        function credentials() {
            return [
                $_ENV['DB_HOST'],
                $_ENV['DB_USERNAME'],
                $_ENV['DB_PASSWORD']
            ];
        }
        function database() {
            return $_ENV['DB_DATABASE'];
        }
    }
    return new AdminerCustom();
}

include './adminer.php';
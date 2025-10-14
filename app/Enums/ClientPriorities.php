<?php

namespace App\Enums;

enum ClientPriorities: int
{
    case Baja = 0;
    case Media = 1;
    case Alta = 2;
}
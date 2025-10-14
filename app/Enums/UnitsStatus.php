<?php

namespace App\Enums;

enum UnitsStatus: int
{
    case Disponible = 0;
    case Vendido = 1;
    case Apartado = 2;
    case Bloqueado = 3;
}
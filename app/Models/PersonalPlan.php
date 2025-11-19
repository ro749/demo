<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;

use Illuminate\Support\Facades\DB;
class PersonalPlan extends Model
{
    protected $fillable = [
        'quotation',
        'per_0',
        'fill_0',
        'per_1',
        'fill_1',
    ];
}

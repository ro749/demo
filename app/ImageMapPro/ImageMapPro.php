<?php

namespace App\ImageMapPro;

use Ro749\ListingUtils\ImageMapPro\SingleImageMapPro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;
class ImageMapPro extends SingleImageMapPro
{
    public function __construct(){
        parent::__construct(
            table: 'units',
            label_column: 'unit',
            data_column: 'status',
            colors: ["#00ff00","#ff0000","#ffff00"],
            opacities:[0.4,0.4,0.4],
            file: 'imageMapPro.json',
            selected_color: "rgba(255, 255, 255, 0.8)"
        );
    }
}
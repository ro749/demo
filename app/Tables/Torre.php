<?php

namespace App\Tables;

use Ro749\FullListingTemplate\Tables\Torre as BaseTable;
use App\Models\Unit;
class Torre extends BaseTable
{
    public function __construct(){
        parent::__construct();
        $this->getter->columns = Unit::get_columns(["unit","modelo","m2","rec","baños","vista","price"]);
    }
}
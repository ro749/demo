<?php

namespace App\Data;

use Illuminate\Support\Facades\View;
use Ro749\FullListingTemplate\Data\UnitData as Data;
use Illuminate\Support\Facades\DB;

class UnitData extends Data
{
	public function __construct(string $column,string $id) {
		parent::__construct($column,$id);
	}

	public function init_data($request = null){
        $unit = parent::init_data($request);
		$chars = DB::table('characteristics')->where('model', '=', $unit->modelo)->get();
		$characteristics = [];
		foreach($chars as $char){
			$characteristics[] = view('characteristic', ['text' => $char->text, 'icon' => $char->icon])->render();
		}
		$unit->characteristics = $characteristics;
		$unit->modelo = DB::table('models')->where('id', '=', $unit->modelo)->first()->name;
		return $unit;
    }
}
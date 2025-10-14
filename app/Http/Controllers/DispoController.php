<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\ImageMapPro\ImageMapPro;
use App\Plans\Plans;
use App\Senders\CotizationSender;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Tables\Torre;
use App\Enums\QuotationStatus;
use App\Enums\UnitsStatus;
class DispoController extends Controller
{
    function index() {
        $imp = ImageMapPro::instance();
        $plans = Plans::instance();
        $cotization =  new CotizationSender;
        $client_id = session()->get('client_id');
        if(!$client_id) return redirect()->route('client-login');
        $client = DB::table('clients')->where('id', $client_id)->first()->name;
        $asesor = Auth::guard('asesor')->user();
        return view('disponibilidad',[
            'plans'=>$plans->get(),
            'imp'=>$imp,'sender'=>$cotization,
            'client'=>$client,
            'asesor'=>$asesor->name,
            'unit'=>null,
            'menu'=>true,
            'asesor_area'=>$asesor,
        ]);
    }

    function client(Request $request) {
        $id = $request->input('id');
        $cotization = DB::table('quotations')->where('id', $id)->first();
        DB::table('quotations')
            ->where('id', $id)
            ->update(values: ['n_open' => $cotization->n_open + 1]);
        $unit = Unit::get('id', $cotization->unit);
        $asesor = DB::table('asesors')->where('id', $cotization->asesor)->first();
        if(
            $unit->status != UnitsStatus::Disponible->value && (
            $cotization->status == QuotationStatus::Pendiente->value ||
            $cotization->status == QuotationStatus::Rechazado->value)
        ){
            return view('unavailable',['asesor'=>$asesor]);
        }
        $plans = Plans::instance();
        return view('disponibilidad',[
            'plans'=>$plans->get(),
            'unit'=>$unit,
            'asesor_area'=>$asesor,
        ]);
    }

    function torre(Request $request){
        $torre = Torre::instance();
        $client_id = session()->get('client_id');
        if(!$client_id) return redirect()->route('client-login');
        $client = DB::table('clients')->where('id', $client_id)->first()->name;
        return view('torre',[
            'table'=>$torre,
            'client'=>$client,
            'asesor'=>Auth::guard('asesor')->user()->name,
            'menu'=>true
        ]);
    }

    function asesor(Request $request){
        $id = $request->input('id');
        $unit = Unit::get('id', $id);
        $plans = Plans::instance();
        $cotization =  new CotizationSender;
        return view('disponibilidad',[
            'plans'=>$plans->get(),
            'unit'=>$unit,
            'sender'=>$cotization,
            'menu'=>true
        ]);
    }
}

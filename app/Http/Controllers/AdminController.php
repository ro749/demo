<?php

namespace App\Http\Controllers;

use App\Tables\AsesorsAdmin;
use App\Tables\ClientsAdmin;
use App\Tables\QuotationsAdmin;
use App\Tables\Ventas;
use App\Forms\RegisterAsesor;
use App\Tables\TorreAdmin;
use Illuminate\Http\Request;
use App\Forms\ClientComment;
use App\Tables\ClientProfileTable;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function asesor_register() {
        $form = RegisterAsesor::instanciate();
        return view('register-asesor', ['form'=>$form]);
    }

    public function asesors() {
        $table = AsesorsAdmin::instance();
        return view('simple-table', ['table'=>$table]);
    }

    public function clients() {
        $table = ClientsAdmin::instance();
        return view('simple-table', ['table'=>$table]);
    }

    public function quotations() {
        $table = QuotationsAdmin::instance();
        return view('simple-table', ['table'=>$table]);
    }

    public function torre() {
        $table = TorreAdmin::instance();
        return view('simple-table', ['table'=>$table]);
    }

    public function ventas() {
        $table = Ventas::instance();
        return view('sales-table', ['table'=>$table]);
    }

    public function profile(Request $request){
        $client = DB::table('clients')->where('id', $request->input('id'))->first();
        $form = ClientComment::instanciate();
        $form->initial_data = ['long_comment'=>$client->long_comment];
        return view('client-profile-admin', [
            'client'=>$client,
            'form'=>$form,
            'table'=>ClientProfileTable::instance()
        ]);
    }

    public function get_clients(Request $request){
        if($request->has('asesor')){
            return DB::table('clients')->where('asesor', $request->input('asesor'))->get();
        }
        $unit = DB::table('units')->where('id', $request->input('id'))->first();
        return DB::table('clients')
        ->select('id', 'name as value')
        ->where('asesor', $unit->asesor)->get();
        
    }

    public function reset_password(Request $request){
        DB::table('asesors')
        ->where('id', $request->input('id'))
        ->update(values: ['reset' => true,'password' => bcrypt('0000')]);
    }
}

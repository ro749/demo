<?php

namespace App\Http\Controllers;

use App\Forms\RegisterClient;
use App\Forms\SelectClient;
use App\Tables\Clients;
use App\Tables\Quotations;
use App\Forms\ClientComment;
use App\Tables\ClientProfileTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Forms\ResetPassword;
class AsesorController extends Controller
{
    public function index() {
        DB::table('sessions')
            ->where('id', session()->getId())
            ->update([
                'guard' => 'asesor',
            ]);
        $form_register = RegisterClient::instanciate();
        $form_select = SelectClient::instanciate();
        return view('client-login', [
            'form_register'=>$form_register, 
            'form_select'=>$form_select
        ]);
    }

    public function clients(){
        $table = Clients::instance();
        return view('table-asesor', ['table'=>$table]);
    }

    public function quotations(){
        $table = Quotations::instance();
        return view('table-asesor', ['table'=>$table]);
    }

    public function profile(Request $request){
        $client = DB::table('clients')->where('id', $request->input('id'))->first();
        $form = ClientComment::instanciate();
        $form->initial_data = ['long_comment'=>$client->long_comment];
        return view('client-profile', [
            'client'=>$client,
            'form'=>$form,
            'table'=>ClientProfileTable::instance()
        ]);
    }

    public function update_profile(Request $request){
        $file = $request->file('pfp');
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $filename, 'public');
        $asesor =  Auth::guard('asesor')->user();
        if ($asesor->pfp != '') {
            Storage::disk('public')->delete('uploads/' . $asesor->pfp);
        }
        DB::table('asesors')
            ->where('id', $asesor->id)
            ->update(values: [
                'pfp'=>$filename
            ]);
    }

    public function reset_password(){
        $asesor =  Auth::guard('asesor')->user();
        return view('reset-password', [
            'name'=>$asesor->name,
            'form'=>ResetPassword::instanciate(),
        ]);
    }
}

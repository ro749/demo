<?php

namespace App\Http\Controllers;

use App\Forms\AsesorLogin;
class AsesorLoginController extends Controller
{
    public function index() {
        $form = AsesorLogin::instanciate();
        return view('simple-login', ['form'=>$form]);
    }
}

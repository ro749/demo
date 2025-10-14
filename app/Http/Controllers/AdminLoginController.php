<?php

namespace App\Http\Controllers;

use App\Forms\AdminLogin;
class AdminLoginController extends Controller
{
    public function index() {
        $form = AdminLogin::instanciate();
        return view('simple-login', ['form'=>$form]);
    }
}

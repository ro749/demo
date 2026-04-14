<?php 

use Illuminate\Support\Facades\Route;
use App\Forms\TestForm;

Route::get("/test", function () {
    $form = new TestForm();
    return view("tests.test", [
        "form"=> $form
    ]);
});
?>
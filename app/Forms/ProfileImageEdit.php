<?php

namespace App\Forms;

use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\ImageUploader;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProfileImageEdit extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "asesors",
            submit_text: "",
            reload: false,
            db_id: Auth::guard('asesor')->user()->id,
            fields: [
                'pfp' => new ImageUploader(
                    route: 'uploads/',
                    view: 'pfp',
                    view_data: ['user' => DB::table('asesors')->where('id', auth()->guard('asesor')->user()->id)->first()],
                    autosave: true
                ),
            ],
        );
    }
}

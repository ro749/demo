<?php

namespace App\Forms;
use Illuminate\Support\Facades\Auth;
use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;

class SelectClient extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            table: "client",
            submit_text: "Entrar",
            redirect: route('disponibilidad'),
            fields: [
                "client" => Selector::fromDB(
                    id: "client",
                    table: "clients",
                    label_column: "name",
                    query_modifier: function ($query) {
                        return $query->where('asesor', Auth::guard('asesor')->user()->id)->orderBy('id', 'desc');
                    }
                )
            ],
        );
    }
    protected static ?SelectClient $instance = null;

    public static function instanciate(): SelectClient
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function prosses(Request $request): string
    {
        session()->put('client_id', $request->input('client'));
        return $this->redirect;
    }
}

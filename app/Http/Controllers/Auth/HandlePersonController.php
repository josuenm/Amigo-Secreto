<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Components\HandlePerson;
use Illuminate\Http\Request;

class HandlePersonController extends Controller
{
    public function createPersonPage()
    {
        $route = route('auth.create-person');
        $title = 'Criar Pessoa';
        $headline = 'Crie uma pessoa';
        $description = 'Crie um usuário para fazer o amigo secreto, coloque obrigatóriamente o nome e email';

        return view('auth.handle-person', compact('route', 'title', 'headline', 'description'));
    }

    public function editPersonPage()
    {
    }

    public function createPerson()
    {
    }
}

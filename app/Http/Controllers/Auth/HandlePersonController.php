<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Components\HandlePerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $route = route('auth.edit-person');
        $title = 'Editar Pessoa';
        $headline = 'Editar pessoa';
        $description = 'Edite o usuário para fazer o amigo secreto, coloque obrigatóriamente o nome e email';

        $name = 'Pindamonhangaba';
        $email = 'pindamonhangaba@gmail.com';

        return view('auth.handle-person', compact('route', 'title', 'headline', 'description', 'name', 'email'));
    }

    public function createPerson()
    {
    }

    public function editPerson()
    {
    }
}

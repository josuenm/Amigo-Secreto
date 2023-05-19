<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $pessoas = [
            [
                'nome' => 'João',
                'email' => 'joao@gmail.com'
            ],
            [
                'nome' => 'Josué',
                'email' => 'josue@gmail.com'
            ],
            [
                'nome' => 'Julian',
                'email' => 'julian@gmail.com'
            ],
            [
                'nome' => 'Gui',
                'email' => 'guilherme@gmail.com'
            ],
        ];

        return view('auth.inicio', compact('pessoas'));
    }
}

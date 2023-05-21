<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $people = [
            [
                'name' => 'João',
                'email' => 'joao@gmail.com'
            ],
            [
                'name' => 'Josué',
                'email' => 'josue@gmail.com'
            ],
            [
                'name' => 'Julian',
                'email' => 'julian@gmail.com'
            ],
            [
                'name' => 'Gui',
                'email' => 'guilherme@gmail.com'
            ],
        ];

        return view('auth.home', compact('people'));
    }
}

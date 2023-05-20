<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandlePersonController extends Controller
{
    public function createPersonPage()
    {
        return view('auth.create-person');
    }

    public function editPersonPage()
    {
    }
}

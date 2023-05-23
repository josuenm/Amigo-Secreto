<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Giveway;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $givewaysEmpty = empty(Giveway::where('user_id', auth()->user()->id)->get()->first());
        $people = Person::where('user_id', auth()->user()->id)->get()->toArray();

        return view('auth.home', compact('people', 'givewaysEmpty'));
    }

    public function searchPeople(Request $req)
    {
        $people = Person::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $req->search . '%')
            ->orWhere('email', 'LIKE', '%' . $req->search . '%')
            ->get()->toArray();

        return view('auth.home', compact('people'));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Giveaway;
use App\Models\Person;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GivewayController extends Controller
{
    public function makeGiveway()
    {
        try {
            $givewaysFound = Giveaway::where('user_id', auth()->user()->id)->get();
            if ($givewaysFound->isNotEmpty()) {
                foreach ($givewaysFound as $giveaway) {
                    $giveaway->delete();
                }
            }

            $people = Person::where('user_id', auth()->user()->id)->get()->toArray();

            if (count($people) % 2 != 0) {
                array_pop($people);
            }

            //

            return redirect('/sorteio')->with('success', 'Sorteado com sucesso');
        } catch (QueryException $e) {
            return back()->with('error', 'Algo deu errado, tente novamente');
        }
    }

    public function index()
    {
        $giveways = Giveaway::where('user_id', auth()->user()->id)
            ->with('personX', 'personY')
            ->get()
            ->toArray();

        return view('auth.giveway', compact('giveways'));
    }
}

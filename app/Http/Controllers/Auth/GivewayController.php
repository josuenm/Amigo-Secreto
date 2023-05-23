<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Giveway;
use App\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GivewayController extends Controller
{
    public function makeGiveway()
    {
        try {
            $givewaysFound = Giveway::where('user_id', auth()->user()->id)->get();
            if ($givewaysFound->isNotEmpty()) {
                foreach ($givewaysFound as $giveaway) {
                    $giveaway->delete();
                }
            }

            $people = Person::all()->where('user_id', auth()->user()->id)
                ->values()
                ->toArray();

            for ($i = 0; $i <= count($people); $i = $i + 2) {
                $giveway = new Giveway();
                $giveway->user_id = auth()->user()->id;

                if (!isset($people[$i + 1])) {
                    $giveway->person_x_id = $people[$i]['id'];
                    $giveway->person_y_id = $people[$i]['id'];
                    $giveway->save();
                    break;
                }

                $giveway->person_x_id = $people[$i]['id'];
                $giveway->person_y_id = $people[$i + 1]['id'];
                $giveway->save();
            }

            return redirect('/sorteio')->with('success', 'Sorteado com sucesso');
        } catch (QueryException $e) {
            return back()->with('error', 'Algo deu errado, tente novamente');
        }
    }

    public function index()
    {
        $giveways = Giveway::where('user_id', auth()->user()->id)
            ->with('personX', 'personY')
            ->get()
            ->toArray();

        return view('auth.giveway', compact('giveways'));
    }
}

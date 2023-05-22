<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HandlePersonController extends Controller
{
    public function createPersonPage()
    {
        $method = 'POST';
        $route = route('auth.create-person');
        $title = 'Criar Pessoa';
        $headline = 'Crie uma pessoa';
        $description = 'Crie um usuário para fazer o amigo secreto, coloque obrigatóriamente o nome e email';

        return view('auth.handle-person', compact('route', 'title', 'headline', 'description', 'method'));
    }

    public function editPersonPage($id)
    {
        $person = Person::where('id', $id)->get()->first();

        $method = "PATCH";
        $route = route('auth.edit-person', ['id' => $id]);
        $title = 'Editar Pessoa';
        $headline = 'Editar pessoa';
        $description = 'Edite o usuário para fazer o amigo secreto, coloque obrigatóriamente o nome e email';

        $name = $person->name;
        $email = $person->email;

        return view('auth.handle-person', compact('route', 'title', 'headline', 'description', 'name', 'email', 'method'));
    }

    public function createPerson(Request $req)
    {
        try {
            $req->validate([
                'name' => 'required|unique:people,name',
                'email' => 'required|email|unique:people,email',
            ], [
                'name.required' => 'O nome é obrigatório',
                'name.unique' => 'O nome já existe',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'O email não é válido',
                'email.unique' => 'O email já existe',
            ]);

            $person = new Person;
            $person->name = $req->name;
            $person->email = $req->email;
            $person->user_id = auth()->user()->id;
            $person->save();

            return redirect('/')->with('success', 'Pessoa criada com sucesso');
        } catch (QueryException $e) {
            return back()->withInput()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        }
    }

    public function editPerson(Request $req, $id)
    {
        try {
            $req->validate([
                'name' => [
                    'required',
                    Rule::unique('people')->ignore($id),
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('people')->ignore($id),
                ],
            ], [
                'name.required' => 'O nome é obrigatório',
                'name.unique' => 'O nome já existe',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'O email não é válido',
                'email.unique' => 'O email já existe',
            ]);

            $person = Person::where('id', $id)->get()->first();
            $person->name = $req->name;
            $person->email = $req->email;
            $person->save();

            return redirect('/')->with('success', 'Pessoa editada com sucesso');
        } catch (QueryException $e) {
            return back()->withInput()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        }
    }

    public function deletePerson($id)
    {
        try {
            $person = Person::where('id', $id)->get()->first();
            $person->delete();

            return redirect('/')->with('success', 'Pessoa deletada com sucesso');
        } catch (QueryException $e) {
            return back()->with('error', 'Algo deu errado, tente novamente');
        }
    }
}

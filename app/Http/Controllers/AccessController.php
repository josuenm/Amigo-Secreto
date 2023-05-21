<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function registerPage()
    {
        return view('register');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        try {
            $req->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|min:6'
            ], [
                'email.required' => 'O email é obrigatório',
                'email.email' => 'O email não é válido',
                'email.exists' => 'Usuário não existe',
                'password.required' => 'A senha é obrigatório',
                'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            ]);

            $credentials = $req->only('email', 'password');
            if (auth()->attempt($credentials, false)) {
                return redirect('/');
            }
            return back()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        } catch (QueryException $e) {
            return back()->withInput()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        }
    }

    public function register(Request $req)
    {
        try {
            $req->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ], [
                'name.required' => 'O nome é obrigatório',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'O email não é válido',
                'email.unique' => 'O email já existe',
                'password.required' => 'A senha é obrigatória',
                'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            ]);

            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $user->encryptPassword($req->password);
            $user->save();

            $credentials = $req->only('email', 'password');

            if (auth()->attempt($credentials, false)) {
                return redirect('/');
            }
            return back()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        } catch (QueryException $e) {
            return back()->withInput()->withErrors(['general-error' => 'Algo deu errado, tente novamente']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}

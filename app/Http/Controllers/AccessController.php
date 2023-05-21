<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

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
            if (Auth::attempt($credentials, false)) {
                $token = Str::random(60);
                $cookie = cookie('amigosecreto.token', $token, 60 * 24); // 24 hours
                Session::put('name', $req->name);
                Session::put('email', $req->email);

                return response()->json(['token' => $token])->withCookie($cookie);
            }

            return response('Email ou senha incorreto', 500);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return response(reset($errors)[0], 401);
        } catch (\Exception $e) {
            return response("Algo deu errado, tente novamente", 500);
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
                'password.required' => 'A senha é obrigatório',
                'password.min' => 'A senha deve ter pelo menos 6 caracteres',
            ]);

            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $user->encryptPassword($req->password);
            $user->save();

            $credentials = $req->only('email', 'password');

            if (Auth::attempt($credentials, false)) {
                $token = Str::random(60);
                $cookie = cookie('amigosecreto.token', $token, 60 * 24); // 24 hours
                Session::put('name', $req->name);
                Session::put('email', $req->email);

                return response()->json(['token' => $token])->withCookie($cookie);
            }

            return response('Erro ao autenticar usuário, tente fazer login com seu acesso', 500);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return response(reset($errors)[0], 401);
        } catch (\Exception $e) {
            return response("Algo deu errado, tente novamente", 500);
        }
    }

    public function logout()
    {
        Auth::logout();

        return response('Sucesso', 200);
    }
}

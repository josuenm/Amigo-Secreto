@extends('layouts.main')

@section('title', 'Entrar')

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/pages/login.css')}}">
@endpush

@section('content')
    <x-header />

    <main class="safe-area py-4">
        <form action="{{route('auth.login')}}" class="login_form d-flex flex-column gap-1">
            <div>
                <h2>Entre com sua conta</h2>
            </div>
            <div class="d-flex flex-column">
                <label for="email">email:</label>
                <input
                    type="email"
                    id="email"
                    class="normal-input"
                    placeholder="Digite seu endereço de email...">
            </div>
            <div class="d-flex flex-column">
                <label for="password">senha:</label>
                <input
                    type="password"
                    id="password"
                    class="normal-input"
                    placeholder="Digite sua senha...">
            </div>

            <div class="d-flex flex-column gap-1">
                <button type="submit" class="w-100 normal-btn mt-3">Entrar</button>
                <a href="{{ url('register') }}" class="nice-btn">Não tenho uma conta</a>
            </div>
        </form>
    </main>
@endsection

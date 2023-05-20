@extends('layouts.main')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/input.css') }}">
@endpush

@section('content')
    <x-header />

    <main class="safe-area py-4">
        <section class="d-flex flex-column w-100 w-lg-75">
            <h2 class="h1">Crie pessoas para fazer seu amigo secreto</h2>
            <p class="home-description">
                O Amigo Secreto é uma tradição divertida e popular em muitos grupos, sejam eles familiares, de amigos ou até mesmo no ambiente de trabalho. Essa atividade consiste em sortear aleatoriamente os nomes dos participantes, de forma que cada pessoa seja responsável por presentear o seu "amigo secreto" de maneira anônima.
            </p>
            <a href="{{ url('cadastrar-pessoa') }}" class="normal-btn mt-2 align-self-start">
                Cadastrar pessoa
            </a>
        </section>

        <section class="pt-5">
            <div class="w-100 d-flex justify-content-center">
                <div class="d-flex flex-column w-100 w-lg-50 py-5 py-lg-4">
                    <label for="pessoa">Buscar:</label>
                    <input type="text" id="pessoa" placeholder="Buscar pessoa" class="normal-input w-100">
                </div>
            </div>

            <strong class="h5">Lista de pessoas:</strong>

            <div class="py-3 d-flex flex-column gap-2">
                @if(isset($people) && !empty($people))
                    @foreach($people as $person)
                        <x-person-card name="{{ $person['name'] }}" email="{{ $person['email'] }}" />
                    @endforeach
                @else
                    <p class="text-center">Nenhum usuário, crie um usuário</p>
                @endif
            </div>
        </section>
    </main>
@endsection

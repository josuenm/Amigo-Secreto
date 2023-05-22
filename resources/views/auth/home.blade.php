@extends('layouts.main')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/person-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/alert.css') }}">
@endpush

@push('head-scripts')
    <script src="{{asset('js/components/person-card.js')}}" defer></script>
    <script src="{{asset('js/components/header.js')}}" defer></script>
    <script src="{{asset('js/components/modal.js')}}" defer></script>
    <script src="{{asset('js/components/alert.js')}}" defer></script>
    <script src="{{asset('js/pages/home.js')}}" defer></script>
@endpush

@push('hidden-components')
    <x-alert />
    <x-modal />
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
                    <form method="GET" action="{{route('auth.search.people')}}" class="search-people_form d-flex gap-05">
                        <input type="text" id="pessoa" name="search" placeholder="Buscar pessoa" class="normal-input w-100">
                        <button type="submit" class="normal-btn btn-with-icon">
                            Buscar
                            <svg aria-hidden="true" class="spinner" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            @if(isset($people) && count($people) > 1)
                <form action="{{route('auth.make.giveway')}}" method="POST" class="giveway_form w-100 py-3 d-flex justify-content-center">
                    @csrf
                    <button type="submit" class="nice-btn">
                        Sortear
                        <svg aria-hidden="true" class="spinner" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
                    </button>
                </form>
            @endif

            <strong class="h5">Lista de pessoas:</strong>
            <div class="py-3">
                @if(isset($people) && !empty($people))
                <div class="d-flex flex-column gap-2">
                    @foreach($people as $person)
                        <x-person-card
                            name="{{ $person['name'] }}"
                            email="{{ $person['email'] }}"
                            id="{{ $person['id'] }}" />
                    @endforeach
                </div>
                @else
                    <p class="text-center">Nenhum usuário, crie um usuário</p>
                @endif
            </div>
        </section>
    </main>
@endsection

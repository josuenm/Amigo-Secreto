@extends('layouts.main')

@section('title', 'Registrar')

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/components/form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/pages/register.css')}}">
@endpush

@section('content')
    <x-header />

    <main class="safe-area py-4">
        <form action="{{route('auth.register')}}" class="register_form d-flex flex-column gap-1">
            <div>
                <h2>Crie sua conta</h2>
            </div>
            <div class="d-flex flex-column">
                <label for="name">nome:</label>
                <input
                    type="text"
                    id="name"
                    class="normal-input"
                    placeholder="Digite seu nome...">
            </div>
            <div class="d-flex flex-column">
                <label for="email">email:</label>
                <input
                    type="email"
                    id="email"
                    class="normal-input"
                    placeholder="Digite seu endreço de email...">
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
                <button type="submit" class="w-100 normal-btn mt-3">Criar conta</button>
                <a href="{{ url('login') }}" class="nice-btn">Já tenho uma conta</a>
            </div>
        </form>
    </main>
@endsection

@push('scripts')
    <script src="{{asset('js/pages/register.js')}}"></script>
@endpush

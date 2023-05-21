@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/components/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/handle-person.css')}}">
@endpush

@section('title', $title)
@section('content')
    <x-header />

    <main class="safe-area py-4">
        <form action="{{$route}}" class="handle-person_form d-flex flex-column gap-1">
            <div>
                <h2>{{$headline}}</h2>
                <p class="handle-person_description">
                    {{$description}}
                </p>
            </div>
            <div class="d-flex flex-column">
                <label for="name">nome:</label>
                <input
                    @if(isset($name))
                        value="{{$name}}"
                    @endif
                    type="text"
                    id="name"
                    class="normal-input"
                    placeholder="Digite seu nome...">
            </div>
            <div class="d-flex flex-column">
                <label for="email">email:</label>
                <input
                    @if(isset($name))
                        value="{{$email}}"
                    @endif
                    type="text"
                    id="email"
                    class="normal-input"
                    placeholder="Digite seu email...">
            </div>

            <button type="submit" class="w-100 normal-btn mt-3">Salvar</button>
        </form>
    </main>
@endsection

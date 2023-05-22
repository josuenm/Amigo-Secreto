<?php

    function urlWithNoBackButton() {
        $urls = ['/', '/login', '/register'];
        return in_array($_SERVER['REQUEST_URI'], $urls);
    }

?>

<header class="header">
    <div class="safe-area d-flex justify-content-between align-items-center">
        @if(!urlWithNoBackButton())
            <button class="header_back-button">Voltar</button>
        @endif

        <strong class="
            @if(!auth()->check() && urlWithNoBackButton())
                mx-auto
            @endif">
            Amigo Secreto
        </strong>

        @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-truncate logout-btn">
                    Sair
                </button>
            </form>
        @endif
    </div>
</header>

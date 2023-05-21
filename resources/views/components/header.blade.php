@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
@endpush

<?php

    function urlWithNoBackButton() {
        $urls = ['/', '/login', '/register'];
        return in_array($_SERVER['REQUEST_URI'], $urls);
    }

?>

<header class="header">
    <div class="safe-area d-flex justify-content-between">
        @if(!urlWithNoBackButton())
            <button class="header_back-button" onclick="back()">Voltar</button>
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

<script>
    function back() {
        let url = '/';

        if(
            sessionStorage.getItem("pagina-anterior") &&
            sessionStorage.getItem("pagina-anterior") !== window.location.href
        ) {
            url = sessionStorage.getItem("pagina-anterior")
        }

        window.location.replace(url)
    }

    window.addEventListener('scroll', () => {
        if(window.pageYOffset < 15  && $('.header').hasClass('active')) {
            $('.header').removeClass('active');
            return
        }
        if(window.pageYOffset > 15 && !$('.header').hasClass('active')) {
            $('.header').addClass('active');
        }
    })
</script>

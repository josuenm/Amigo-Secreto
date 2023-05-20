@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/input.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
@endpush

<header class="header">
    <div class="safe-area d-flex @if($_SERVER['REQUEST_URI'] !== '/') justify-content-between @else justify-content-center @endif">
        @if($_SERVER['REQUEST_URI'] !== '/')
            <button class="header_back-button" onclick="back()">Voltar</button>
        @endif
        <strong>
            Amigo Secreto
        </strong>
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

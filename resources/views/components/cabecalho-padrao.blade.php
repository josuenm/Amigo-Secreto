<header class="cabecalho-padrao">
    <div class="safe-area d-flex @if($_SERVER['REQUEST_URI'] !== '/') justify-content-between @else justify-content-center @endif">
        @if($_SERVER['REQUEST_URI'] !== '/')
            <button class="cabecalho-padrao_botao-voltar" onclick="voltar()">Voltar</button>
        @endif
        <strong>
            Amigo Secreto
        </strong>
    </div>
</header>

<script>
    function voltar() {
        if(sessionStorage.getItem("pagina-anterior")) {
            window.location.replace(sessionStorage.getItem("pagina-anterior"))
           return
        }
        window.location.replace(`${window.location.host}/`)
    }

    window.addEventListener('scroll', () => {
        if(window.pageYOffset < 15  && $('.cabecalho-padrao').hasClass('ativo')) {
            $('.cabecalho-padrao').removeClass('ativo');
            return
        }
        if(window.pageYOffset > 15 && !$('.cabecalho-padrao').hasClass('ativo')) {
            $('.cabecalho-padrao').addClass('ativo');
        }
    })
</script>

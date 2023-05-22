<div id="native-modal" class="native-modal">
    <form action="" method="POST" id="native-modal_form" class="native-modal_content">
        @csrf
        <input type="hidden" name="_method" value="">
        <strong id="native-modal_title" class="h3"></strong>
        <p id="native-modal_description"></p>

        <footer>
            <button type="button" class="nice-btn" id="native-modal_close">Fechar</button>
            <button type="submit" class="normal-btn" id="native-modal_action">Confirmar</button>
        </footer>
    </form>
    <div id="native-modal_background" class="native-modal_background"></div>
</div>

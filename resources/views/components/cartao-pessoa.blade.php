<div class="cartao-pessoa p-4 rounded">
    <div class="rounded cartao-pessoa_container-nome px-3 py-1 mb-4 text-truncate">
        <strong class="h4">{{$nome}}</strong>
    </div>
    <div class="d-flex flex-column">
        <p>
            <strong class="mr-2">Email:</strong>
            <span>{{$email}}</s1pan>
        </p>
        <p>
            <strong class="mr-2">Criado em:</strong>
            <span>17/05/2023</s1pan>
        </p>
    </div>
    <div class="d-flex justify-content-end gap-1">
        <button class="cartao-pessoa_botao-editar px-2 py-1 rounded">Editar</button>
        <button class="cartao-pessoa_botao-deletar px-2 py-1 rounded" onclick="abrirDeletarModal()">Deletar</button>
    </div>
</div>

<div id="cartao-pessoa_modal">
    <div id="modal_background" onclick="fecharDeletarModal()"></div>
</div>


@push('scripts')
<script src="{{asset('js/componentes/cartao-pessoa.js')}}"></script>
@endpush

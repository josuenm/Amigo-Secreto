@push('styles')
    <link rel="stylesheet" href="{{asset('css/components/person-card.css')}}">
@endpush

<div class="person-card p-4 rounded">
    <div class="rounded person-card_container-name px-3 py-1 mb-4 text-truncate">
        <strong class="h4">{{$name}}</strong>
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
        <button class="person-card_edit-button px-2 py-1 rounded">Editar</button>
        <button class="person-card_delete-button px-2 py-1 rounded" onclick="abrirDeletarModal()">Deletar</button>
    </div>
</div>

<div id="person-card_modal">
    <div id="modal_background" onclick="fecharDeletarModal()"></div>
</div>


@push('head-scripts')
    <script src="{{asset('js/components/person-card.js')}}" defer></script>
@endpush

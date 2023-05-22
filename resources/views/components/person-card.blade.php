<div class="person-card p-4 rounded">
    <a href="{{route('auth.edit-person', ['id' => $id])}}">
        <div class="rounded person-card_container-name px-3 py-1 mb-4 text-truncate">
            <strong class="h4">{{$name}}</strong>
        </div>
    </a>
    <div class="d-flex flex-column">
        <p>
            <strong class="mr-2">Email:</strong>
            <span>{{$email}}</s1pan>
        </p>
    </div>
    <div class="d-flex justify-content-end gap-1">
        <button
            data-url="{{route('auth.delete-person', ['id' => $id])}}"
            class="person-card_delete-button px-2 py-1 rounded">Deletar</button>
    </div>
</div>

<div class="giveway-card">
    <div class="d-flex justify-content-center py-4 gap-05 h4">
        <span class="name">{{$personX['name']}}</span>
        <span>tirou com</span>
        <span class="name">{{$personY['name']}}</span>
    </div>
    <div class="d-flex flex-column gap-05">
        <x-person-card id="{{$personX['id']}}" name="{{$personX['name']}}" email="{{$personX['email']}}" />
        <x-person-card id="{{$personY['id']}}" name="{{$personY['name']}}" email="{{$personY['email']}}" />
    </div>
</div>

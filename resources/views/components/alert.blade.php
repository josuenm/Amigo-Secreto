<div class="native-alert_container">
    @if(session('success'))
        <div class="native-alert native-alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="native-alert native-alert-error">
            {{session('error')}}
        </div>
    @endif
</div>

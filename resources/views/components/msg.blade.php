@if(session('sucesso'))
    <p><h2>{{ __('alerta/msg.user.sucesso') }}</h2></p>
@endif

@if(session('delet'))
    <p> <h2>{{ __('alerta/msg.user.delet') }}</h2></p>
@endif
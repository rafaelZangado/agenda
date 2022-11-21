@if(session('sucesso'))
    <p> {{session('sucesso')}} </p>
@endif

@if(session('delet'))
    <p>{{session('delet')}}</p>
@endif
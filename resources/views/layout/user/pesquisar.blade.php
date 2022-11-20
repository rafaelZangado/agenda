@extends('layout.bory')
@section('title', 'Pesquisar contatos')
@section('titulo', 'Pesquisar Contatos')
@section('pesquisar')

<form method="get" action="{{route('agenda.buscar')}}">
    <div class="col">
        <input class="form-control form-control-lg" type="text" placeholder="Digite o nome do contato" name="busca" aria-label=".form-control-lg example">
        <button class="btn btn-primary btn-lg"> Buscar</button>
    </div>
</form>



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> Nome </th>
            <th> fone </th>
            <th> email </th>
        </tr>        
    <thead>
    <tbody>
        @foreach ($busca as $lista)
            <tr>
                <td>{{$lista->id}} </td>
                <td>{{$lista->name}} </td>
                <td>{{$lista->email}} </td>
                <td>
                    <a href="{{route('editar.contato', $lista->id)}}"><span class="glyphicon-pencil"></span>
                        Editar </a>| 
                    <a href="{{route('deletar', $lista->id)}}"><span class="glyphicon-trash">Deletar</a>               
                </td>
            </tr>          
        @endforeach
    </tbody>
</table>

@endsection()


@extends('layout.bory')
@section('title', 'Meus contatos')
@section('titulo', 'Meus Contatos')
@section('tabela')

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> Avatar </th>
            <th> Nome </th>
            <th> fone </th>
            <th> ação </th>
           
        </tr>        
    <thead>
    <tbody>
        @foreach ($userListar as $lista)
            <tr>
                <td><img src="storage/app/{{$lista->avatar}}" width='100'> {{$lista->avatar}} </td>
                
                <td>{{$lista->name}} </td>
                <td>{{$lista->fone}} </td>
             
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


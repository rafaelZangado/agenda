@extends('layout.bory')
@section('title', 'Meus contatos')
@section('titulo', 'Editar Contato')
@section('formulario')
     
    <form method="post" action="{{route('salvar.edit', $editar->id)}}"> 
        @csrf 
        {{-- @method('PUT') --}}
        <input type="text" name="name" value="{{$editar->name}}" placeholder="{{$editar->name}}">
        <input type="email" name="email" value="{{$editar->email}}" placeholder="{{$editar->email}}">
        <input type="text" name="fone" value="{{$editar->fone}}" placeholder="{{$editar->fone}}">
        <button>Salvar</button>
    </form>
    
@endsection()

@extends('layout.bory')
@section('title', 'Meus contatos')
@section('titulo', 'Novo Contato')
@section('formulario')
     
    <form method="post" action="{{route('agenda.salvar')}}"> 
        @csrf 
        <input type="text" name="name" placeholder="nome">
        <input type="email" name="email" placeholder="email@email">
        <input type="text" name="fone" placeholder="fone">
        <button>Salvar</button>
    </form>
    
@endsection()

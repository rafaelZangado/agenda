@extends('layout.bory')
@section('title', 'Editar contatos')
@section('titulo', 'Editar Registros')
@section('tabela')

   
<form method="post" action=""> 
    @csrf 
    <input type="text" name="name" placeholder="nome">
    <input type="email" name="email" placeholder="email@email">
    <input type="text" name="fone" placeholder="fone">
    <button>Salvar</button>
</form>

@endsection()

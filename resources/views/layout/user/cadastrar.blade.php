@extends('layout.bory')
@section('title', 'Meus contatos')
@section('titulo', 'Novo Contato')
@section('formulario')
    
    <form method="post" action="{{route('agenda.salvar')}}" enctype= multipart/form-data> 
        @csrf 
        <div class="mb-3">
            <input type="file" class="form-label" name="image" >
        <div>
        <div class="mb-3">
            <input type="text" class="form-label" name="name" placeholder="nome">
        <div>
        <div class="mb-3">
            <input type="email"class="form-label" name="email" placeholder="email@email">
        <div>
        <div class="mb-3">
            <input type="text" class="form-label" name="fone" placeholder="fone">
        <div>                               
        <button class="btn btn-dark">Salvar</button>
    </form>
    
@endsection()

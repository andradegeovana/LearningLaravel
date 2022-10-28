@extends('layouts.pagina')

@section('content')
    <form action="{{route('produto.create')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input required type="text" name="nome">
        <label for="codigo">Codigo</label>
        <input required type="text" name="codigo">
        <label for="preco">Preco</label>
        <input required type="text" name="preco">
        <label for="estoque">Estoque</label>
        <input required type="text" name="estoque">
        {!! Form::label('descricao', "Descrição", []) !!}
        {!! Form::textarea('descricao', '', ['required']) !!}
        <button type="submit">Salvar</button>
    </form>
@endsection

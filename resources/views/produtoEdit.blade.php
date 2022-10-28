@extends('layouts.pagina')

@section('content')
    <form action="{{route('produto.update', $produto->id)}}" method="post">
        @csrf
        @method("put")
        <label for="nome">Nome</label>
        <input required type="text" name="nome" value={{$produto->nome}}>
        <label for="codigo">Codigo</label>
        <input required type="text" name="codigo" value={{$produto->codigo}}>
        <label for="preco">Preco</label>
        <input required type="text" name="preco" value={{$produto->preco}}>
        <label for="estoque">Estoque</label>
        <input required type="text" name="estoque" value={{$produto->estoque}}>
        {!! Form::label('descricao', "Descrição", []) !!}
        {!! Form::textarea('descricao', $produto->descricao, ['required']) !!}
        <button type="submit">Salvar</button>
    </form>
@endsection

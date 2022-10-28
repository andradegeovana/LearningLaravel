@extends('layouts.pagina')

@section('content')

    <a href="{{route('produto.create')}}"><button type="button">Criar produto</button></a>
    <br>
    @foreach ($produtos as $produto)
        <a href="{{route('produto.show', $produto->id)}}">
            <b class="text-green">{{"Nome: ".$produto->nome}}</b>
            {{-- <p>{{"Codigo: ".$produto->codigo}}</p>
            <p>{{"Preço: ".$produto->preco}}</p>
            <p>{{"Estoque: ".$produto->estoque}}</p>
            <p>{{"Descrição: ".$produto->descricao}}</p> --}}
        </a>
        <br>
    @endforeach

@endsection
{{-- composer require laravelcollective/html --}}

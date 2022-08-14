@extends('layouts.app')

@section('title', 'Ver Produto')

@section('content')
    <h1>Ver Produto</h1>

    <div class="card" style="width: 18rem;">
        @if ($product->image)
            <img src="{{ asset("storage/$product->image") }}" alt="{{ $product->name }}" width="250" height="250">
        @else
            <img src="{{ asset('img/produto-sem-imagem.png') }}" alt="Sem Imagem" width="250" height="250">
        @endif
        <div class="card-body">
            <b>Nome: </b> <p>{{ $product->name }}</p>
            <b>Categoria: </b> <p>{{ $product->category->name }}</p>
            <b>Preço: </b> <p>{{ $product->price }}</p>
        </div>
    </div>
@endsection

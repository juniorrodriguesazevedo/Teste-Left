@extends('layouts.app')

@section('title', 'Ver Categoria')

@section('content')
    <h1>Ver Categoria</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <b>Nome: </b> <p>{{ $category->name }}</p>
        </div>
    </div>
@endsection

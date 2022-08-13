@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form>
        @include('products._form')
    </form>
@endsection

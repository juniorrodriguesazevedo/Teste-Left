@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @include('products._form')
    </form>
@endsection

@extends('layouts.app')

@section('title', 'Cadastrar Categoria')

@section('content')
    <h1>Cadastrar Categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories._form')
    </form>
@endsection

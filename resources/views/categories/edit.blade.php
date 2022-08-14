@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('categories._form')
    </form>
@endsection
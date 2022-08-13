@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto</h1>

    <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        @include('products._form')
    </form>
@endsection
@extends('layouts.app')

@section('title', 'Editar Endereço')

@section('content')
    <h1>Editar Endereço</h1>

    <form action="{{ route('address.update', $address->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('address._form')
    </form>
@endsection
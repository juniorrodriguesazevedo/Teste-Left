@extends('layouts.app')

@section('title', 'Cadastrar Endereço')

@section('content')
    <h1>Cadastrar Endereço</h1>

    <form action="{{ route('address.store') }}" method="POST">
        @csrf
        @include('address._form')
    </form>
@endsection

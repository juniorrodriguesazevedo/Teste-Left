@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')
    <h1>Cadastrar Cliente</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        @include('clients._form')
    </form>
@endsection

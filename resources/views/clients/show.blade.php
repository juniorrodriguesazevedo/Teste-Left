@extends('layouts.app')

@section('title', 'Ver Cliente')

@section('content')
    <h1>Ver Cliente</h1>

    <div class="card" style="width: 22rem;">
        <div class="card-body">
            <b>Nome: </b> <p>{{ $client->name }}</p>
            <b>Email: </b> <p>{{ $client->email }}</p>
            <b>Telefone: </b> <p>{{ $client->phone }}</p>
            <b>CPF: </b> <p>{{ $client->cpf }}</p>
            <b>RG: </b> <p>{{ $client->rg }}</p>
            <b>Data de aniversário: </b> <p>{{ $client->birthday_formatted }}</p>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Ver Endereço')

@section('content')
    <h1>Ver Endereço</h1>

    <div class="card" style="width: 22rem;">
        <div class="card-body">
            <b>Nome: </b> <p>{{ $address->client->name }}</p>
            <b>Rua: </b> <p>{{ $address->street }}</p>
            <b>Bairro: </b> <p>{{ $address->district }}</p>
            <b>Número: </b> <p>{{ $address->number }}</p>
            <b>Cidade: </b> <p>{{ $address->city }}</p>
            <b>Estado: </b> <p>{{ $address->state }}</p>
            <b>CEP: </b> <p>{{ $address->zip_code }}</p>
        </div>
    </div>
@endsection

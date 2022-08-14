@extends('layouts.app')

@section('title', 'Clientes')

@section('content')

    <h1>Clientes</h1>
    <div style="text-align: right">
        <a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary">Adicionar Novo</a>
    </div>

    <div class="mt-2">
        @include('alerts.success')
    </div>
        

    <table class="table table-striped">
        <caption><strong>N. Registros: {{ $clients->count() }}</strong></caption>
          <thead class="text-primary">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Telefone</th>
              <th scope="col" style="width: 200px">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td >{{ $client->phone }}</td>
                    <td class="btn-toolbar">
                        <div class="btn-group mr-1">
                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info btn-sm btn-round">
                                Ver
                            </a>
                        </div>
                        <div class="btn-group mr-1">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success btn-sm btn-round">
                               Editar
                            </a>
                        </div>
                        <div class="btn-group">
                            <form action="{{ route('clients.destroy', $client->id) }}" id="form-{{ $client->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete btn btn-danger btn-sm btn-round">
                                    Deletar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
              @endforeach
          </tbody>
    </table>

    <div class="d-flex">
        {!! $clients->links() !!}
    </div>
@endsection
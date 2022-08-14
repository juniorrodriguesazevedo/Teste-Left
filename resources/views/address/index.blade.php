@extends('layouts.app')

@section('title', 'Endereços')

@section('content')

    <h1>Endereços</h1>
    <div style="text-align: right">
        <a href="{{ route('address.create') }}" class="btn btn-sm btn-primary">Adicionar Novo</a>
    </div>

    <div class="mt-2">
        @include('alerts.success')
    </div>
        

    <table class="table table-striped">
        <caption><strong>N. Registros: {{ $adresses->count() }}</strong></caption>
          <thead class="text-primary">
            <tr>
              <th scope="col">Cliente</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
              <th scope="col" style="width: 200px">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($adresses as $address)
                <tr>
                    <td>{{ $address->client->name }}</td>
                    <td>{{ $address->city }}</td>
                    <td>{{ $address->state }}</td>
                    <td class="btn-toolbar">
                        <div class="btn-group mr-1">
                            <a href="{{ route('address.show', $address->id) }}" class="btn btn-info btn-sm btn-round">
                                Ver
                            </a>
                        </div>
                        <div class="btn-group mr-1">
                            <a href="{{ route('address.edit', $address->id) }}" class="btn btn-success btn-sm btn-round">
                               Editar
                            </a>
                        </div>
                        <div class="btn-group">
                            <form action="{{ route('address.destroy', $address->id) }}" id="form-{{ $address->id }}" method="post">
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
        {!! $adresses->links() !!}
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Categorias')

@section('content')

    <h1>Categorias</h1>
    <div style="text-align: right">
        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Adicionar Novo</a>
    </div>

    <div class="mt-2">
        @include('alerts.success')
    </div>
        

    <table class="table table-striped">
        <caption><strong>N. Registros: {{ $categories->count() }}</strong></caption>
          <thead class="text-primary">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col" style="width: 200px">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td class="btn-toolbar">
                        <div class="btn-group mr-1">
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm btn-round">
                                Ver
                            </a>
                        </div>
                        <div class="btn-group mr-1">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-sm btn-round">
                               Editar
                            </a>
                        </div>
                        <div class="btn-group">
                            <form action="{{ route('categories.destroy', $category->id) }}" id="form-{{ $category->id }}" method="post">
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

    <div class="card-footer py-4">
        <nav class="d-flex justify-content-end" aria-label="...">
            {!! $categories->links() !!}
        </nav>
    </div>
@endsection
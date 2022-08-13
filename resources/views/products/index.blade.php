@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

    <h1>Produtos</h1>
    <div style="text-align: right">
        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Adicionar Novo</a>
    </div>

    <table class="table table-striped">
        <caption><strong>N. Registros: {{ $products->count() }}</strong></caption>
          <thead class="text-primary">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
              <th scope="col">Ativo</th>
              <th scope="col" style="width: 120px">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td >{{ $product->is_active }}</td>
                    <td class="btn-toolbar">
                        <div class="btn-group mr-1">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm btn-round btn-icon">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="btn-group mr-1">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm btn-round btn-icon">
                                <i class="fas fa-tools"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <form action="{{ route('products.destroy', $product->id) }}" id="form-{{ $product->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="button" rel="tooltip" class="btn-delete btn btn-danger btn-sm btn-round btn-icon">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
              @endforeach
          </tbody>
    </table>
@endsection
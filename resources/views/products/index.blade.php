@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

    <h1>Produtos</h1>
    <div style="text-align: right">
        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Adicionar Novo</a>
    </div>

    <div class="mt-5">
        @include('alerts.success')
    </div>

    <div class="mt-2">
        @include('products._form_search')
    </div>
        
    <table class="table table-striped">
        <caption><strong>N. Registros: {{ $products->count() }}</strong></caption>
          <thead class="text-primary">
            <tr>
              <th scope="col">Imagem</th>
              <th scope="col">Nome</th>
              <th scope="col">Categoria</th>
              <th scope="col">Preço</th>
              <th scope="col" style="width: 200px">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img src="{{ asset("storage/$product->image") }}" alt="{{ $product->name }}" width="80" height="30">
                        @else
                            <img src="{{ asset('img/produto-sem-imagem.png') }}" alt="Sem Imagem" width="80" height="30" >
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>R${{ $product->price_formatted }}</td>
                    <td class="btn-toolbar">
                        <div class="btn-group mr-1">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm btn-round">
                                Ver
                            </a>
                        </div>
                        <div class="btn-group mr-1">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm btn-round">
                               Editar
                            </a>
                        </div>
                        <div class="btn-group">
                            <form action="{{ route('products.destroy', $product->id) }}" id="form-{{ $product->id }}" method="post">
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
            @if (isset($filters))
                {{ $products->appends($filters)->links() }}
            @else
                {{ $products->links() }}
            @endif
        </nav>
    </div>
@endsection
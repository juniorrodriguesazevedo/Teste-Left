<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-md">
              <nav class="nav">
                <a class="nav-link text-white" href="{{ route('products.index') }}">Produtos</a>
                <a class="nav-link text-white" href="">Categorias</a>
                <a class="nav-link text-white" href="">Clientes</a>
                <a class="nav-link text-white" href="">Endereços</a>
              </nav>
            </div>
          </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>

<style>
    main {
        padding: 25px 50px 25px 50px;
    }
</style>
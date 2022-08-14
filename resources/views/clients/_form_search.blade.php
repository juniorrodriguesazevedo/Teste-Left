<form action="{{ route('clients.search') }}" class="row g-3" method="POST">
    @csrf
    <div class="col-10">
      <label for="search" class="visually-hidden">Buscar</label>
      <input type="text" class="form-control" id="search" name="search">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3"><B>Buscar</B></button>
    </div>
</form>
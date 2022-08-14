<div class="row">
  <div class="col-6 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $client->name ?? old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
  </div>
  <div class="col-6 mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $client->email ?? old('email') }}">
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>
  <div class="col-3 mb-3">
    <label for="phone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone ?? old('phone') }}">
    @error('phone')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-3 mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $client->cpf ?? old('cpf') }}">
        @error('cpf')
          <div class="text-danger">{{ $message }}</div>
        @enderror
  </div>
  <div class="col-3 mb-3">
    <label for="rg" class="form-label">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="{{ $client->rg ?? old('rg') }}">
    @error('rg')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-3 mb-3">
    <label for="birthday" class="form-label">Data de Aniversário</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $client->birthday ?? old('birthday') }}">
    @error('birthday')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
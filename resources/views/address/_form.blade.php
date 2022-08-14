<div class="row">
    <div class="col-6 mb-3">
      <label for="client_id" class="form-label">Cliente</label>
      <select class="form-select form-select" name="client_id">
        @foreach($clients as $client)
          <option value="{{ $client->id }}"
            @if (isset($address->client_id))
              {{ $client->id == $address->client_id ? 'selected' : '' }}
            @endif >
            {{ $client->name }}
          </option>
        @endforeach
        @error('client_id')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </select>
    </div>
    <div class="col-6 mb-3">
        <label for="street" class="form-label">Rua</label>
        <input type="text" class="form-control" id="street" name="street" value="{{ $address->street ?? old('street') }}">
        @error('street')
          <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
      <label for="district" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="district" name="district" value="{{ $address->district ?? old('district') }}">
      @error('district')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-2 mb-3">
      <label for="number" class="form-label">Número</label>
      <input type="text" class="form-control" id="number" name="number" value="{{ $address->number ?? old('number') }}">
      @error('number')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-3 mb-3">
      <label for="city" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="city" name="city" value="{{ $address->city ?? old('city') }}">
      @error('city')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-2 mb-3">
      <label for="state" class="form-label">Estado</label>
      <input type="text" class="form-control" id="state" name="state" value="{{ $address->state ?? old('state') }}">
      @error('state')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-2 mb-3">
      <label for="zip_code" class="form-label">CEP</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $address->zip_code ?? old('zip_code') }}">
      @error('zip_code')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
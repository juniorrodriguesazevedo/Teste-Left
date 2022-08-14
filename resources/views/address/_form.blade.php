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
      <select class="form-select form-select" name="state">
          <option value="AC" @if (isset($address->state)) {{ $address->state == 'AC' ? 'selected' : '' }} @endif>Acre</option>
          <option value="AL" @if (isset($address->state)) {{ $address->state == 'AL' ? 'selected' : '' }} @endif>Alagoas</option>
          <option value="AP" @if (isset($address->state)) {{ $address->state == 'AP' ? 'selected' : '' }} @endif>Amapá</option>
          <option value="AM" @if (isset($address->state)) {{ $address->state == 'AM' ? 'selected' : '' }} @endif>Amazonas</option>
          <option value="BA" @if (isset($address->state)) {{ $address->state == 'BA' ? 'selected' : '' }} @endif>Bahia</option>
          <option value="CE" @if (isset($address->state)) {{ $address->state == 'CE' ? 'selected' : '' }} @endif>Ceará</option>
          <option value="DF" @if (isset($address->state)) {{ $address->state == 'DF' ? 'selected' : '' }} @endif>Distrito Federal</option>
          <option value="ES" @if (isset($address->state)) {{ $address->state == 'ES' ? 'selected' : '' }} @endif>Espírito Santo</option>
          <option value="GO" @if (isset($address->state)) {{ $address->state == 'GO' ? 'selected' : '' }} @endif>Goiás</option>
          <option value="MA" @if (isset($address->state)) {{ $address->state == 'MA' ? 'selected' : '' }} @endif>Maranhão</option>
          <option value="MT" @if (isset($address->state)) {{ $address->state == 'MT' ? 'selected' : '' }} @endif>Mato Grosso</option>
          <option value="MS" @if (isset($address->state)) {{ $address->state == 'MS' ? 'selected' : '' }} @endif>Mato Grosso do Sul</option>
          <option value="MG" @if (isset($address->state)) {{ $address->state == 'MG' ? 'selected' : '' }} @endif>Minas Gerais</option>
          <option value="PA" @if (isset($address->state)) {{ $address->state == 'PA' ? 'selected' : '' }} @endif>Pará</option>
          <option value="PB" @if (isset($address->state)) {{ $address->state == 'PB' ? 'selected' : '' }} @endif>Paraíba</option>
          <option value="PR" @if (isset($address->state)) {{ $address->state == 'PR' ? 'selected' : '' }} @endif>Paraná</option>
          <option value="PE" @if (isset($address->state)) {{ $address->state == 'PE' ? 'selected' : '' }} @endif>Pernambuco</option>
          <option value="PI" @if (isset($address->state)) {{ $address->state == 'PI' ? 'selected' : '' }} @endif>Piauí</option>
          <option value="RJ" @if (isset($address->state)) {{ $address->state == 'RJ' ? 'selected' : '' }} @endif>Rio de Janeiro</option>
          <option value="RN" @if (isset($address->state)) {{ $address->state == 'RN' ? 'selected' : '' }} @endif>Rio Grande do Norte</option>
          <option value="RS" @if (isset($address->state)) {{ $address->state == 'RS' ? 'selected' : '' }} @endif>Rio Grande do Sul</option>
          <option value="RO" @if (isset($address->state)) {{ $address->state == 'RO' ? 'selected' : '' }} @endif>Rondônia</option>
          <option value="RR" @if (isset($address->state)) {{ $address->state == 'RR' ? 'selected' : '' }} @endif>Roraima</option>
          <option value="SC" @if (isset($address->state)) {{ $address->state == 'SC' ? 'selected' : '' }} @endif>Santa Catarina</option>
          <option value="SP" @if (isset($address->state)) {{ $address->state == 'SP' ? 'selected' : '' }} @endif>São Paulo</option>
          <option value="SE" @if (isset($address->state)) {{ $address->state == 'SE' ? 'selected' : '' }} @endif>Sergipe</option>
          <option value="TO" @if (isset($address->state)) {{ $address->state == 'TO' ? 'selected' : '' }} @endif>Tocantins</option>
          @error('state')
            <div class="text-danger">{{ $message }}</div>
          @enderror
      </select>
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
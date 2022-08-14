<div class="row">
    <div class="col-12 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name ?? old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-12 mb-3">
        <label for="is_active" class="form-label">Ativo</label>
        <select class="form-select form-select-lg" name="is_active">
            <option value="Sim" @if (isset($category->is_active)) {{ $category->is_active == 'Sim' ? 'selected' : '' }} @endif>Sim</option>
            <option value="Não" @if (isset($category->is_active)) {{ $category->is_active == 'Não' ? 'selected' : '' }} @endif>Não</option>
            @error('is_active')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </select>
      </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
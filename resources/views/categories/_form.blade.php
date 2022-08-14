<div class="row">
    <div class="col-12 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name ?? old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
<div class="row">
    <div class="col-8 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? old('name') }}">
      </div>
      <div class="col-4 mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? old('price') }}">
      </div>
      <div class="col-6 mb-3">
          <label for="category_id" class="form-label">Categoria</label>
          <select class="form-select form-select-lg" name="category_id">
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->name }}
              </option>
            @endforeach
          </select>
      </div>
      <div class="col-6 mb-3">
        <label for="is_active" class="form-label">Ativo</label>
        <select class="form-select form-select-lg" name="is_active">
            <option value="Sim" {{ $product->is_active == 'Sim' ? 'selected' : '' }}>Sim</option>
            <option value="Não" {{ $product->is_active == 'Não' ? 'selected' : '' }}>Não</option>
        </select>
      </div>
      <div class="col mb-3">
          <label for="image" class="form-label">Imagem</label>
          <input type="file" name="image" class="form-control-file">
      </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
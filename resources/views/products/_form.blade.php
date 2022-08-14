<div class="row">
    <div class="col-8 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? old('name') }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-4 mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? old('price') }}">
        @error('price')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-12 mb-3">
          <label for="category_id" class="form-label">Categoria</label>
          <select class="form-select form-select-lg" name="category_id">
            @foreach($categories as $category)
              <option value="{{ $category->id }}"
                 @if (isset($product->category_id))
                  {{ $category->id == $product->category_id ? 'selected' : '' }}
                 @endif >
                {{ $category->name }}
              </option>
            @endforeach
            @error('category_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </select>
      </div>
      <div class="col mb-3">
          <label for="image" class="form-label">Imagem</label>
          <input type="file" name="image" class="form-control-file">
          @error('image')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
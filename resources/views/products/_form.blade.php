<div class="row">
    <div class="col-8 mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col-4 mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
</div>
<div class="mb-3">
    <label for="is_active" class="form-label">Ativo</label>
    <select class="form-select form-select-lg" name="is_active">
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select>
</div>
<div class="col mb-3">
    <input type="file" name="image" class="form-control-file">
  </div>
<button type="submit" class="btn btn-primary">Salvar</button>
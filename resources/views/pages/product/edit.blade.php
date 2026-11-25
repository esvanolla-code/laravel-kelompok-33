<form action="/product/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name_product" class="form-control"
           value="{{ old('name_product', $product->name_product) }}">
    <input type="number" name="stock_product" class="form-control"
           value="{{ old('stock_product', $product->stock_product) }}">
    <input type="number" name="price_product" class="form-control"
           value="{{ old('price_product', $product->price_product) }}">
    <textarea name="desc_product" class="form-control">{{ old('desc_product', $product->desc_product) }}</textarea>
    <input type="number" name="id_category" class="form-control"
           value="{{ old('id_category', $product->id_category) }}">

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
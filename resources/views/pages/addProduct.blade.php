
@extends('layouts.master')

@section('content')

<h1>Tambah Produk</h1>

<form action="/product/store" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name_product" class="form-control">
        @error('name_product')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Stok Produk</label>
        <input type="number" name="stock_product" class="form-control">
        @error('stock_product')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Harga Produk</label>
        <input type="number" name="price_product" class="form-control">
        @error('price_product')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Deskripsi Produk</label>
        <textarea name="desc_product" class="form-control"></textarea>
        @error('desc_product')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>ID Kategori</label>
        <input type="number" name="id_category" class="form-control">
        @error('id_category')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Simpan Produk
    </button>
</form>

@endsection

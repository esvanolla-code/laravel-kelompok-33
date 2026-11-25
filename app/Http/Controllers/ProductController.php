<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data_toko = [
            'nama_toko' => 'Tulis Nama Kamu',
            'alamat_toko' => 'Jl. Terus Jadian Kagak',
            'status_toko' => 'Belum Pasti'
        ];

        //kita gunakan Eloquent ORM
        $data_product = Product::get(); //menjalankan query untuk mendapatkan semua data pada database table produk

        return view('pages.product.show', [
            'data_toko'=> $data_toko,
            'data_produk'=>$data_product,
        ]);
    }

    public function addProduct(){
        return view('pages.product.addProduct');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_product' => 'required|string|max:255',
            'stock_product' => 'required|integer|min:0',
            'price_product' => 'required|numeric|min:0',
            'desc_product' => 'required|string',
            'id_category' => 'required|integer'
        ]);

        Product::create($validated);

        return redirect('/product')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product.editProduct', [
            'product' => $product,
        ]);
    }

    // Menyimpan perubahan
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_product' => 'required|string|max:255',
            'stock_product' => 'required|integer|min:0',
            'price_product' => 'required|numeric|min:0',
            'desc_product' => 'required|string',
            'id_category' => 'required|integer'
        ]);

        Product::findOrFail($id)->update($validated);

        return redirect('/product')->with('success', 'Produk berhasil diubah!');
    }

    // Menghapus produk
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect('/product')->with('success', 'Produk berhasil dihapus!');
    }
}
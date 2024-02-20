<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Hiển thị form thêm sản phẩm
    public function create()
    {
        return view('admin.products.create');
    }

    // Lưu sản phẩm mới vào database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'nullable|string',
            'manufacturer' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'size' => $request->get('size'),
            'manufacturer' => $request->get('manufacturer'),
            'quantity' => $request->get('quantity'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $product->save();

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm thành công.');
    }

    // Hiển thị form sửa sản phẩm
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // Cập nhật sản phẩm vào database
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'nullable|string',
            'manufacturer' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $product->update([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'size' => $request->get('size'),
            'manufacturer' => $request->get('manufacturer'),
            'quantity' => $request->get('quantity'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    // Xóa sản phẩm (xóa mềm)
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}

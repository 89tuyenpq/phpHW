@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Chỉnh sửa sản phẩm</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" min="0" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="size">Kích thước:</label>
                <input type="text" class="form-control" id="size" name="size" value="{{ $product->size }}">
            </div>
            <div class="form-group">
                <label for="manufacturer">Nhà sản xuất:</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ $product->manufacturer }}">
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" min="0" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection

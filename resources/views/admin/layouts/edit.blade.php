@extends('layouts.app')

@section('content')
    <h1>Sửa sản phẩm</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="size">Kích thước:</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $product->size }}">
        </div>
        <div class="form-group">
            <label for="manufacturer">Nhà sản xuất:</label>
            <input type="text" name="manufacturer" id="manufacturer" class="form-control" value="{{ $product->manufacturer }}">
        </div>
        <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection

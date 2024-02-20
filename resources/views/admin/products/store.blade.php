@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tạo sản phẩm mới</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            {{-- Thêm các trường khác tương ứng --}}
            <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
        </form>
    </div>
@endsection

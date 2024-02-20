@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Xóa sản phẩm</h2>
        <p>Bạn có chắc chắn muốn xóa sản phẩm "{{ $product->name }}" không?</p>
        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xác nhận xóa</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
@endsection

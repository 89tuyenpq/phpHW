<?php
<!-- resources/views/products/index.blade.php -->

@foreach ($products as $product)
    {{ $product->name }}
    <!-- Hiển thị thông tin sản phẩm khác -->
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

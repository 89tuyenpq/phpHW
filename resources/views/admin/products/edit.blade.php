<?php
<!-- resources/views/products/edit.blade.php -->

<form action="{{ route('products.update', $product) }}" method="POST">
@csrf
@method('PUT')
<input type="text" name="name" value="{{ $product->name }}">
<!-- Hiển thị và cho phép chỉnh sửa các trường thông tin sản phẩm khác -->
<button type="submit">Update</button>
</form>

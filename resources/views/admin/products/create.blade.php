<?php
<!-- resources/views/products/create.blade.php -->

<form action="{{ route('products.store') }}" method="POST">
@csrf
<input type="text" name="name" placeholder="Name">
<!-- Thêm các trường thông tin sản phẩm khác -->
<button type="submit">Create</button>
</form>

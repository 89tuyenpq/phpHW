<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('size')->nullable();
            $table->string('manufacturer');
            $table->integer('quantity');
            $table->timestamps(); // Sử dụng timestamps để tự động thêm trường created_at và updated_at
            $table->softDeletes(); // Thêm hỗ trợ xóa mềm
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

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
            $table->string('size');
            $table->string('manufacturer');
            $table->integer('quantity');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes(); // Thêm cột deleted_at để thực hiện xóa mềm
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

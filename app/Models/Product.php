<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'price', 'size', 'manufacturer', 'quantity'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}


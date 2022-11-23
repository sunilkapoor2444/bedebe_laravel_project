<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [ 
        'user_id', 'user_type', 'name', 'sku', 'price', 'description', 'website_link', 'product_img', 'reference', 'color', 'size'
    ];
}

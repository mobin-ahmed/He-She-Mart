<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_name', 'product_price', 'product_color', 'product_short_description', 'product_long_description', 'product_image', 'publication_status'];
}

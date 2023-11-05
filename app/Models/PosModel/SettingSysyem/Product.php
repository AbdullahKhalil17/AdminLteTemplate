<?php

namespace App\Models\PosModel\SettingSysyem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'productName',
        'productDescription',
        'productCategory',
        'productPrice',
        'stockQuantity',
    ];
}

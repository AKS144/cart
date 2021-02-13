<?php

namespace App\Http\Controllers\Api;//added Api

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;//added

class ProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function show(Product $product)
    {
        return $product;//for single products
    }
}

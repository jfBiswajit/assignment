<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
  public function index()
  {
    $productsPath = storage_path() . "/products/products.json";
    $products = json_decode(file_get_contents($productsPath));
    dd($products);
  }
}

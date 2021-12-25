<?php

namespace App\Http\Controllers\Product;

use App\Actions\ProductAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
  public function index(ProductAction $productAction)
  {
    $products = $productAction->getProducts();
    return view('products.index', compact('products'));
  }

  public function show(ProductAction $productAction, $productId)
  {
    $product = $productAction->getProduct($productId);
    return view('products.show', ['product' => $product]);
  }
}

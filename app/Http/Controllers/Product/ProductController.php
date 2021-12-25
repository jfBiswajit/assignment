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
  }
}

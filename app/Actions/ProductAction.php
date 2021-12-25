<?php

namespace App\Actions;

class ProductAction
{
  private function fetchProducts() {
    $productsPath = storage_path() . "/products/products.json";
    return json_decode(file_get_contents($productsPath));
  }
  
  public function getProducts() {
    return $this->fetchProducts();
  }
  
  public function getProduct($productId) {
    $products = collect($this->fetchProducts());
    return $products->where('product_id', $productId)->first();
  }
}

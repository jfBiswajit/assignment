<?php

namespace App\Actions;

class ProductAction
{
  public function getProducts() {
    $productsPath = storage_path() . "/products/products.json";
    return json_decode(file_get_contents($productsPath));
  }
}

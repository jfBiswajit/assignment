<?php

namespace App\Actions;

use Illuminate\Contracts\Session\Session;

class CardAction
{
  public function addToCard($product)
  {
    if (session()->has('card')) {
      session()->push('card', $product);
    } else {
      session(['card' => [$product]]);
    }
  }
}

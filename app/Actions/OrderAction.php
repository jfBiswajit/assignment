<?php

namespace App\Actions;

use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class OrderAction
{
  public function checkOutNow()
  {
    $cardItem = session('card');

    foreach ($cardItem as $item) {
      $order = new Order();
      
      $order->user_id = Auth::user()->id;
      $order->product_id = $item->product_id;
      $order->title = $item->title;
      $order->image_url = $item->image_url;
      $order->description = $item->description;
      $order->price = $item->price;

      $order->save();
    }

    session()->forget('card');
  }
}

<?php

namespace App\Http\Controllers\Order;

use App\Actions\OrderAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function checkout(OrderAction $orderAction)
  {
    $orderAction->checkOutNow();
    return redirect()->route('dashboard')->with('msg', 'Successfully checkout!');
  }
}

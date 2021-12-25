<?php

namespace App\Http\Controllers\Order;

use App\Actions\OrderAction;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function index(OrderAction $orderAction) {
    $orders = $orderAction->getPlacedOrders();
    return view('orders.index', ['orders' => $orders]);
  }
  
  public function checkout(OrderAction $orderAction)
  {
    $orderAction->checkOutNow();
    return redirect()->route('dashboard')->with('msg', 'Successfully checkout!');
  }
}

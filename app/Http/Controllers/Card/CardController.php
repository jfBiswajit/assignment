<?php

namespace App\Http\Controllers\Card;

use App\Actions\CardAction;
use App\Actions\ProductAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
  public function index()
  {
    $cardItems = session('card') ?? [];
    return view('card.index', ['cardItems' => $cardItems]);
  }
  
  
  public function add(CardAction $cardAction, ProductAction $productAction, $productId)
  {
    $product = $productAction->getProduct($productId);
    $cardAction->addToCard($product);
    return redirect()->back()->with(['msg' => 'Successfully added to the card!']);
  }
}

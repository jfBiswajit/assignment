@extends('layouts.header')
@section('content')

@if (session()->has('msg'))
<div class="alert alert-success" role="alert">
  {{ session('msg') }}
</div>
@endif
<div class="card w-25 mx-auto">
  <div class="card-body">
    <h5 class="card-title">{{ $product->title }}</h5>
    <img class="card-img-top" src="{{ $product->image_url }}" alt="Card image cap">
    <p class="card-text">
      <small>
        {{ $product->description }}
      </small>
    </p>
    <a href="{{ route('card.add', ['productId' => $product->product_id]) }}" class="btn btn-primary btn-block">Add to
      Card</a>
  </div>
</div>
@endsection

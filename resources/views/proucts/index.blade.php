@extends('layouts.header')
@section('content')
  <div class="card-deck">
  @foreach ($products as $product)
  <div class="card">
    <img class="card-img-top" src="{{ $product->image_url }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title }}</h5>
      <p class="card-text">
        <small>
          {{ Str::limit($product->description, 70, ' ...') }}
        </small>
      </p>
    </div>
    <div class="card-footer">
      <a href="{{ route('product.show', ['productId' => $product->product_id]) }}" class="btn btn-success btn-block">Details</a>
    </div>
  </div>
  @endforeach
</div>
@endsection

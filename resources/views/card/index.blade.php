@extends('layouts.header')
@section('content')
<div class="w-50 mx-auto">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cardItems as $key => $item)
    <tr>
      <td>{{ ++$key }}</td>
      <td>{{ $item->title }}</td>
      <td>
        <img style="height: 50px; width: 60px;" src="{{ $item->image_url }}" alt="">
      </td>
      <td>{{ $item->price }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="#" class="btn btn-success btn-block my-2">Checkout</a>
</div>
@endsection

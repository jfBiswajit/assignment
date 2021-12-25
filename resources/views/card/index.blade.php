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
    @foreach ($cardItems as $item)
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="#" class="btn btn-success btn-block">Checkout</a>
</div>
@endsection

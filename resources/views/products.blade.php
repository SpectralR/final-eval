@extends('template')
@section('content')
  <h2>Our Products</h2>
  @foreach($items as $item)
    <div>
      <h3>{{ $item->name }}</h3>
      <p>{{ $item->price }}€</p>
    </div>
  @endforeach
@endsection

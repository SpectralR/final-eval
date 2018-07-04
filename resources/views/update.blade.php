@extends('template')
@section('content')
  <h2>Updating {{ $item->name }}</h2>
  <form class="" action="/product/update" method="post">
    @csrf
    <input class="hidden" type="number" name="id" value="{{ $item->id }}">
    <input type="text" name="name" value="{{ $item->name }}">
    <select class="" name="price">
      @foreach($prices as $price)
        @if($price == $currentPrice)
          <option value="{{ $price->id }}" selected>{{ $price->price }}€</option>
        @else
          <option value="{{ $price->id }}">{{ $price->price }}€</option>
        @endif
      @endforeach
    </select>
    <input type="number" name="quantity" value="{{ $item->quantity }}">
    <input type="submit" name="" value="Submit">
  </form>
@endsection

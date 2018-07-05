@extends('template')
@section('content')
  <h2>Updating {{ $item->name }}</h2>
  <form class="" action="/product/update" method="post">
    @csrf
    <input class="hidden" type="number" name="id" value="{{ $item->id }}">
    <input class="text" type="text" name="name" value="{{ $item->name }}">
    <select class="text" name="price">
      @foreach($prices as $price)
        @if($price == $currentPrice)
          <option value="{{ $price->id }}" selected>{{ $price->price }}€</option>
        @else
          <option value="{{ $price->id }}">{{ $price->price }}€</option>
        @endif
      @endforeach
    </select>
    <input class="text" type="number" name="quantity" value="{{ $item->quantity }}">
    <input class="button" type="submit" name="" value="Submit">
  </form>
@endsection

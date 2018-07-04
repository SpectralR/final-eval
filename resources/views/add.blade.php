@extends('template')
@section('content')
  <form class="" action="/product/add" method="post">
    @csrf
    <input type="text" name="name" value="" placeholder="Name">
    <select class="" name="price">
      @foreach($prices as $price)
        <option value="{{ $price->id }}">{{ $price->price }}€</option>
      @endforeach
    </select>
    <select multiple name="categories[]">
      @foreach($categories as $cat)
        <<option value="{{ $cat->id }}">{{ $cat->name }}</option>
      @endforeach
    </select>
    <input type="number" name="quantity" value="" placeholder="Quantity">
    <input type="submit" name="" value="Submit">
  </form>
@endsection

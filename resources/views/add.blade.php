@extends('template')
@section('content')
  <form class="" action="/product/add" method="post">
    @csrf
    <input class="text" type="text" name="name" value="" placeholder="Name">
    <select class="text" name="price">
      @foreach($prices as $price)
        <option value="{{ $price->id }}">{{ $price->price }}€</option>
      @endforeach
    </select>
    <select class="text" multiple name="categories[]">
      @foreach($categories as $cat)
        <<option value="{{ $cat->id }}">{{ $cat->name }}</option>
      @endforeach
    </select>
    <input class="text" type="number" name="quantity" value="" placeholder="Quantity">
    <input class="button" type="submit" name="" value="Submit">
  </form>
@endsection

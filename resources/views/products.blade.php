@extends('template')
@section('content')
  <h2>Our Products</h2>
  <div class="main-container">
  @foreach($items as $item)
    <div class="individual-container">
      <h3>{{ $item->name }}</h3>
      <p class="price">{{ $item->price->price }}€</p>
      <p class="stock">stock: {{ $item->quantity }}</p>
      @foreach($item->category as $category)
          <p class="category">{{ $category->name }}</p>
      @endforeach
      <a href="/product/update/{{ $item->id }}"><button class="button">Update</button></a>
    </div>
  @endforeach
</div>
<div class="responsive">
</div>
@endsection

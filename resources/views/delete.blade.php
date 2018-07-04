@extends('template')
@section('content')
 <h2>Deleting a product</h2>
 <form class="" action="/product/delete" method="post">
   @csrf
   <select class="" name="itemToDelete">
     @foreach($items as $item)
       <option value="{{ $item->id }}">{{ $item->name }}</option>
     @endforeach
   </select>
   <input type="submit" name="" value="Submit">
  </form>
@endsection

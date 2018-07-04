<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item as item;
use App\category as cat;
use App\price as price;

class MusicController extends Controller
{
    public function create(Request $request)
    {
      $categories = $request->input(['categories']);

      $item = new item;
      $item->name = $request->input(['name']);
      $item->price_id = $request->input(['price']);
      $item->quantity = $request->input(['quantity']);
      $item->save();
      $item->category()->attach($categories);
      return redirect('/products');
    }

    public function showCreate()
    {
      $prices = price::all();
      $cats = cat::all();
      return view('add', ['prices' => $prices, 'categories' => $cats]);
    }

    public function read()
    {
      $items = item::all();
      return view('products', ['items' => $items]);
    }

    public function showUpdate($id)
    {
      $item = item::find($id);
      $price = price::find($item->price_id);
      $prices = price::all();
      
      return view('update', ['item' => $item, 'currentPrice' => $price, 'prices' => $prices]);
    }

    public function update(Request $request)
    {
      $categories = $request->input(['categories']);

      $item = item::find($request->input(['id']));
      $item->name = $request->input(['name']);
      $item->price_id = $request->input(['price']);
      $item->quantity = $request->input(['quantity']);
      $item->save();
      return redirect('/products');
    }

    public function showDelete()
    {
        $items = item::all();
        return view('delete', ['items' => $items]);
    }

    public function delete(Request $request)
    {
      $item = item::find($request->input(['itemToDelete']));
      $item->delete();
      return redirect('/products');
    }
}

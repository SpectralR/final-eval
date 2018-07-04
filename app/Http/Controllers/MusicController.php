<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item as item;

class MusicController extends Controller
{
    public function create()
    {
      $items = item::all();
      dd($items);
      return view('products', ['items' => $items]);
    }

    public function read()
    {
      $items = item::all();
      return view('products', ['items' => $items]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

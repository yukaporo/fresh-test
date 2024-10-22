<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $items = Products::paginate(6);
        $this->data['items'] = $items;

        return view('products.index',['items' => $items]);
    }
}

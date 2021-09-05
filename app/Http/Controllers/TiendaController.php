<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('tienda.index', compact('products'));
    }
}

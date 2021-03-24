<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
// qui sovrascrivo i metodi pubblici

class PublicController extends Controller
{
    public function index()
    {
     $pizzas= Pizza::all();
     return view('pizzas.index',compact('pizzas'));
    }
    public function show(Pizza $pizza)
    {
     return view('pizzas.show',compact('pizza'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function getAllPizzas(){

		$pizzas=['margarita'=>'margarita', 'capricoza','capricoza'];

		return view('pizzas.pizzas', compact('pizzas'));
	}
}

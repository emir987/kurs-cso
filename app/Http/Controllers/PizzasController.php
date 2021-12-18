<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function getAllPizzas(){

		$pizzas=Pizza::all();

		return view('pizzas.pizzas', compact('pizzas'));
	}

	public function show($id){
		$pizza=Pizza::find($id);

		return view('pizzas.pizza', compact('pizza'));
	}

	public function create(Request $request){
		$pizza= new Pizza();
		$pizza->name= $request->get('name');
		$pizza->save();

		return redirect('/pizzas');
	}
}

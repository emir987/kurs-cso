<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
	public function getAllPizzas()
	{
		//sortiranje po imenu
		// $pizzas=Pizza::orderBy('name','desc')->get();

		//filtriranje po imenu
		// $pizzas=Pizza::where('name','margarita')->get();

		//da se vrate sve pice
		$pizzas = Pizza::all();

		//compact funkcija koristi da bi napravila niz od varijabli
		return view('pizzas.pizzas', compact('pizzas'));
	}

	public function show($id)
	{
		//vracanje jedne pice zajedno sa sefom
		//with metoda radi tako sto u Modelu definisete relaciju
		$pizza = Pizza::with('chef')->find($id);

		return view('pizzas.pizza', compact('pizza'));
	}

	public function create(Request $request)
	{
		$validate = $request->validate([
				'name' => 'required'
			]
		);
		// prvi nacin
		// $pizza= new Pizza();
		// $pizza->name= $request->get('name');
		// $pizza->save();

		//drugi nacin, u Modelu je potrebno da upisete $fillable/ $guarded
		Pizza::create($request->all());

		return redirect('/pizzas');
	}

	public function delete($id)
	{
		Pizza::find($id)->delete();
		return redirect('/pizzas');
	}

	public function update($id)
	{
		$pizza = Pizza::find($id);
		$pizza->name = request('name');
		$pizza->save();

		return redirect('/pizzas');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
	public function index(Request $request)
	{

		//naziv kljuca iz url (npr ?name=vrijednost)
		$name = $request->input('name');

		return view('homepage', ['name1' => $name]);
	}
}

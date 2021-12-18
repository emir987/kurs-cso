@extends('layouts.layout')

@section('title', 'Homepage')

@section('body')
@foreach ($pizzas as $pizza)
<h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
@endforeach
<form action="/pizzas" method="post">
	@csrf
	<label for="name">Ime pice</label>
	<input id="name" name="name" type="text">
	<button type="submit" class="btn btn-primary">Potvrdi</button>
</form>
@error('name')
{{$message}}
@enderror


@endsection
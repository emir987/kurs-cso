@extends('layouts.layout')

@section('title', 'Homepage')

@section('body')
<h4>Ime pice: {{$pizza->name}}</h4>
<h4> Sef: {{$pizza->chef->name}}</h4>
<h3>Promjenite ime pici</h3>
<form action="/pizzas/{{$pizza->id}}" method="post">
	@csrf
	@method('PUT')
	<label for="name">Novo ime za izmjenu</label>
	<input id="name" name="name" type="name" type="text">
	<button type="submit" class="btn btn-primary">Izmjeni ime</button>
</form>
<br>
<h3>Pica ceka na Vas!</h3>
<form action="/pizzas/{{$pizza->id}}" method="post">
	@method('delete')
	@csrf
	<Button>Porucite picu</Button>
</form>
<br>
<a href="/pizzas">Vratite se unazad</a>


@endsection
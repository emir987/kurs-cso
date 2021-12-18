@extends('layouts.layout')

@section('title', 'Homepage')

@section('body')
    @foreach ($pizzas as $pizza)
		<h4>{{$pizza}}</h4>
	@endforeach

@endsection
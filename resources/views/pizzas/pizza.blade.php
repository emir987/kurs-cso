@extends('layouts.layout')

@section('title', 'Homepage')

@section('body')
    <h4>{{$pizza->name}}</h4>
	<a href="/pizzas">Vratite se unazad</a>

@endsection
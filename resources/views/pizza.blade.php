<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Prikaz jedne pizze</h1>
	<h1>{{$pizza->name}}</h1>
	<a href="/pizzas">Vratite se nazad na pizze</a>
	<form action="/pizzas/{{$pizza->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button>Naruci</button>	
    </form>
</body>
</html>
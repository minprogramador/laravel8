<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>Pagina dos produtos</h1>

	@foreach($produtos as $produto)

		<p>{{$produto->nome}}</p>

	@endforeach
	{{$produtos->links()}}
</body>
</html>
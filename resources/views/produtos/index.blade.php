@extends('layout.template')

@section('title', 'Produtos')

@section('content')
<div class="container">
	<h1>Pagina dos produtos</h1>

	@foreach($produtos as $produto)

		<p>{{$produto->nome}}</p>

	@endforeach
	{{$produtos->links()}}
</div>
@endsection

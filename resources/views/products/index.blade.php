@extends('layouts.admin')

@section('title', 'Produtos')

@section('content')
	<h3>Produtos</h3>

	<p class="text-right"><a href="{{ route('products.create') }}" class="btn btn-primary btn-xs">Novo</a></p>

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>titulo</th>
				<th>qtd</th>
				<th class="text-right">ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->title }}</td>
				<td>{{ $product->qtd }}</td>
				<td class="text-right">
					<a href="{{ route('products.edit', ['id'=>$product->id]) }}" class="btn btn-primary btn-xs">edit</a>
					<a href="{{ route('products.show', ['id'=>$product->id]) }}" class="btn btn-success btn-xs">show</a>
					<a href="{{ route('products.categories', ['id'=>$product->id]) }}" class="btn btn-default btn-xs">categorias</a>
					<form action="{{ route('products.destroy', ['id'=>$product->id]) }}" method="POST" style="display: inline-block">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" value="delete" class="btn btn-danger btn-xs">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
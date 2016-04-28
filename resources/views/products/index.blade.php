<h3>Produtos</h3>

<p>
	<a href="{{ route('products.create') }}">Novo</a>
</p>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Título</th>
			<th>Qtd</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $product)
		<tr>
			<th>{{ $product->id }}</th>
			<th>{{ $product->title }}</th>
			<th>{{ $product->qtd }}</th>
			<th>
				<a href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a>
				<a href="{{ route('products.show', ['id' => $product->id]) }}">show</a>

				<a href="{{ route('products.categories', ['id' => $product->id]) }}">categorias</a>
				<form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
					<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
				</form>
			</th>
		</tr>
	@endforeach
	</tbody>
</table>
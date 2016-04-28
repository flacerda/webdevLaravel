<h3>Categorias</h3>

<p>
	<a href="{{ route('categories.create') }}">Novo</a>
</p>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Título</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $categorie)
		<tr>
			<th>{{ $categorie->id }}</th>
			<th>{{ $categorie->title }}</th>
			<th>
				<a href="{{ route('categories.edit', ['id' => $categorie->id]) }}">Edit</a>
				<a href="{{ route('categories.show', ['id' => $categorie->id]) }}">show</a>
				<form action="{{ route('categories.destroy', ['id' => $categorie->id]) }}" method="POST">
					<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
				</form>
			</th>
		</tr>
	@endforeach
	</tbody>
</table>
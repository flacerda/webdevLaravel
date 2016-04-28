<h3>Usuarios</h3>

<p>
	<a href="{{ route('users.create') }}">Novo</a>
</p>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Título</th>

<th>E-mail</th>			
<th>Senha</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $user)
		<tr>
			<th>{{ $user->id }}</th>
			<th>{{ $user->name }}</th>
<th>{{ $user->email }}</th>
<th>{{ $user->password }}</th>
			<th>
				<a href="{{ route('users.edit', ['id' => $user->id]) }}">Edit</a>
				<a href="{{ route('users.show', ['id' => $user->id]) }}">show</a>
				<form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
					<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
				</form>
			</th>
		</tr>
	@endforeach
	</tbody>
</table>
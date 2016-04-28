<h3>Editar Usuário</h3>

@include('validation.messages')

<form action="{{ route('users.update', ['id' => $data->id]) }}" method="POST">
	Nome:<input type="text" name="name" value="{{ $data->name }}"><br>
	E-mail:<input type="text" name="email" value="{{ $data->email }}"><br>
Senha:<input type="text" name="password" value="{{ $data->password }}"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $data->id }}">
	<input type="hidden" name="_method" value="PUT">
</form>
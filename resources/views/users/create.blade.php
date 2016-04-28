<h3>Novo Usuário</h3>

@include('validation.messages')


<form action="{{ route('users.index') }}" method="POST">
	Nome:<input type="text" name="name" value="{{ old('name') }}" ><br>
	E-mail:<input type="text" name="email" value="{{ old('email') }}"><br>
	Senha:<input type="text" name="password" value="{{ old('password') }}"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
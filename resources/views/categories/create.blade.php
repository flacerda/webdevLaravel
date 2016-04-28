<h3>Novo Categoria</h3>

@include('validation.messages')


<form action="{{ route('categories.index') }}" method="POST">
	Titulo:<input type="text" name="title" value="{{ old('title') }}" ><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
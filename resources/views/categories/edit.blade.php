<h3>Editar Categoria</h3>

@include('validation.messages')

<form action="{{ route('categories.update', ['id' => $data->id]) }}" method="POST">
	Titulo:<input type="text" name="title" value="{{ $data->title }}"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $data->id }}">
	<input type="hidden" name="_method" value="PUT">
</form>
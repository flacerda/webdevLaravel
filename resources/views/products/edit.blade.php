<h3>Editar Produto</h3>

@include('validation.messages')

<form action="{{ route('products.update', ['id' => $data->id]) }}" method="POST">
	Titulo:<input type="text" name="title" value="{{ $data->title }}"><br>
	Descrição<textarea name="body" id="" cols="30" rows="10">{{$data->body }}</textarea><br>
	Valor R$<input type="text" name="value" value="{{ $data->value }}"><br>
	Quantidade:<input type="text" name="qtd" value="{{ $data->qtd }}"><br>
	URL:<input type="text" name="url" value="{{ $data->url }}"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $data->id }}">
	<input type="hidden" name="_method" value="PUT">
</form>
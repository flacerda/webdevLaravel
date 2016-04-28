<h3>Novo Produto</h3>

@include('validation.messages')


<form action="{{ route('products.index') }}" method="POST">
	Titulo:<input type="text" name="title" value="{{ old('title') }}" ><br>
	Descrição<textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea><br>
	Valor R$<input type="text" name="value" value="{{ old('value') }}"><br>
	Quantidade:<input type="text" name="qtd" value="{{ old('qtd') }}"><br>
	URL:<input type="text" name="url" value="{{ old('url') }}"><br>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
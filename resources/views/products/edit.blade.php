@extends('layouts.admin')

@section('title', 'Edição de produto')

@section('content')
	<h3>Novo produto</h3>

	@include('validation.messages')

	<form action="{{ route('products.update', ['id'=>$data->id]) }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{ $data->id }}">
		Titulo: <input type="text" name="title" value="{{ $data->title }}" class="form-control"><br>
		Descriçao: <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $data->value }}</textarea><br>
		Valor: <input type="text" name="value" value="{{ $data->value }}" class="form-control"><br>
		Quantidade: <input type="text" name="qtd" value="{{ $data->qtd }}" class="form-control"><br>
		url: <input type="text" name="url" value="{{ $data->url }}" class="form-control"><br>
		<input type="submit" class="btn btn-success btn-lg">
	</form>
@endsection
<h3>Categoria de {{ $product->title }}</h3>

<form action="{{ route('products.categories', ['id' => $product->id]) }}" method="POST">
	<ul>
	@foreach ($categories as $k=>$v)
		<li>
			<input type="checkbox" name="categories[]" value="{{ $k }}" @if(!empty($checked[$k])) checked="checked" @endif> {{ $v}}
		</li>
	@endforeach
	</ul>
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
</form>
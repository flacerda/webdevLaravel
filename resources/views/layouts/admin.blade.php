<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device, initial-scale=1">
	<title>@yield('title', 'Laravel') -> Administração</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="/">Adm Laravel 5.1 </a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
				    <li><a href="{{ route('products.index') }}">Produtos</a></li>
				    <li><a href="{{ route('categories.index') }}">Categorias</a></li>
				    <li><a href="{{ route('users.index') }}">Usuários</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
				  	<li><a href="#">Erik</a></li>
				    <li><a href="#"><span class="glyphicon glyphicon-off"></span></a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>
	<main>
		<section id="content" class="container">
			@yield('content')
		</section>
	</main>
	<footer>
	    <p class="text-center">
	    	<small>Adm Laravel - {{ date('Y') }} - todos os direitos reservados</small>
	    </p>
	</footer>
</body>
</html>
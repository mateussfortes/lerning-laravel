<html>
	<head>
		<link href="/css/app.css" rel="stylesheet">
		<title>Controle de estoque</title>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">
					Estoque
					</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			@yield('conteudo')
		</div>

		<footer class="footer">
			<div class="container-fluid">
				<p>© Testes</p>
			</div>
		</footer>
	</body>
</html>
<html>
<head>
	<title>Autocomplete para Produtos</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>

<body>
	
	<div class="container">
		<h3>Produtos</h3>
		<form method="POST">
			<div class="form-group">
				<input type="text" name="busca" id="busca" class="form-control" placeholder="Buscar produtos, marcas e muito mais..."/>
			</div>
		</form>
		
		<ul id="resultado">
		</ul>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
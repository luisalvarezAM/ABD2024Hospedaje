<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<script src='https://kit.fontawesome.com/cedb2cb338.js' crossorigin='anonymous'></script>
	<link rel='stylesheet' href='style.css'>
	<title>Registro de productos</title>
</head>

<body>
	<div class='login-box'>
		<h2>Reservar</h2>
		<form action='alta_producto.php' method='GET'>
			<div class='user-box'>
				<input type='text' name='producto' value="<?= $producto ?>">
				<label>Producto</label>
			</div>
			<div class='user-box'>
				<input type='text' name='precioVenta' value="<?= $precioVenta ?>">
				<label>Precio</label>
			</div>
			<div class='user-box'>
				<input type='text' name='stock' value="<?= $stock ?>">
				<label>Stock</label>
			</div>
			<b href=''><input type='submit' name='accion' value='Guardar'>
			</b>
		</form>

	</div>
	<a href='principal.php'>Pagina principal</a>
</body>

</html>
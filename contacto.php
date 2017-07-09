<!DOCTYPE html>
<html lang="es">
<?include("conexion.php");
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacto - Soldadoras Andinas</title>
	<link rel="shortcut icon" type="image/xicon" href="img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
</head>
<body>
	<header class="center">
		<div id="wrapper" class="columns">
			<article>
				<a href="index.php"><img src="img/logo.png"></a>
			</article>
			<article>
				<input type="checkbox" name="btnmenu" class="btnmenu">
				<div class="btn-menu"><i class="fa fa-bars"></i><i class="fa fa-times"></i> menu</div>
				<ul id="menu">
					<li><a href="index.php">inicio</a></li>
					<li><a href="about.php">nosotros</a></li>
					<li><a href="index.php#brands">marcas</a></li>
					<li><a href="index.php#products">productos</a></li>
					<li><a href="garantia-servicios.php">garantía y servicios</a></li>
					<li><a href="index.php#psale">puntos de venta</a></li>
					<li><a href="#contact">contacto</a></li>
				</ul>
			</article>
		</div>
	</header>
	<main>
		<section id="header" class="head head-contact center">
			<!--<div id="wrapper" class="center">
				<article>
					<h1>Contacto</h1>
				</article>
			</div>-->
		</section>
		<section id="contact">
			<article class="title center">
				<div id="wrapper">
					<h3>contacto</h3>
				</div>
			</article>
			<article>
				<div class="center"><div id="wrapper" class="columns">
					<div>
						<h1>Escríbenos:</h1>
						<form action="enviar.php" method="post">
							<ul>
								<li>Nombres:</li>
								<li><input type="text" name="" required></li>
								<li>Telf. Fijo</li>
								<li><input type="text" name="" required></li>
								<li>Telf. Móvil</li>
								<li><input type="text" name="" required></li>
								<li>Correo</li>
								<li><input type="email" name="" required></li>
								<li>Empresa</li>
								<li><input type="text" name=""></li>
								<li>País</li>
								<li><input type="text" name=""></li>
								<li>Ciudad</li>
								<li><input type="text" name="" required></li>
								<li>Mensaje</li>
								<li><textarea></textarea></li>
								<li><button type="submit">enviar</button></li>
							</ul>
						</form>
					</div>
					<div class="center">
						<div style="display: block;text-align: center;">
							<img src="img/map-marker.svg" style="max-width: 150px;">
							<br><br>
    						<ul>
    							<li>Ubicación Planta de Fabricación</li>
    							<li>Av. Bolognesi #510 Carretera Central Km. 0.500 Santa Anita. Lima, Perú</li>
    						</ul>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9329.13705318577!2d-76.9762053998119!3d-12.054764722840575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c661517cf0eb%3A0x6a345de1cacaea0f!2sBolognesi+510%2C+Santa+Anita+15008!5e0!3m2!1ses-419!2spe!4v1485315218128" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div></div>
				<div class="center"><div id="wrapper" class="central">
					<div class="columns">
						<div style="display: block;">
							<p>Central Telefónica:</p>
							<p class="second"><i class="fa fa-phone"></i> (01)-3623857</p>
						</div>
						<div>
							<a href="https://www.facebook.com/solandinas/" target="_blank">
								<p>encuéntranos en facebook</p>
								<p class="second"><i class="fa fa-facebook"></i> /solandinas</p>
							</a>
						</div>
					</div>
				</div></div>
			</article>
		</section>
	</main>
	<footer>
		<ul>
			<li>Av.Bolognesi #510 Carretera Central Km 0.500</li>
			<li>santa anita - lima - Perú</li>
			<li><a href="http://victoriapublicidad.com.pe/" target="_blank">© 2017 Soldadoras Andinas S.A. - Todos los derechos reservados</a></li>
		</ul>
	</footer>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/desplazamiento.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<!-- slider carrusel -->
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on('ready', function() {
	$(".regular").slick({
		dots: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3
	});
});
</script>
</html>
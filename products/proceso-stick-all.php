<!DOCTYPE html>
<html lang="es">
<?include("../conexion.php");
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?$id = $_REQUEST["id"];
	$sqlstr="select * from saprocesostick where codigo=".$id;
	$filas = mysqli_query($conexion, $sqlstr);
	while ($fila = mysqli_fetch_array($filas)){?>
	<?$id=$fila['codigo'];?>
		<title><?echo$fila['name'];?> - Proceso Smaw - Soldadoras Andinas</title>
	<? }?>
	<link rel="shortcut icon" type="image/xicon" href="../img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<header class="center">
		<div id="wrapper" class="columns">
			<article>
				<a href="../index.php"><img src="../img/logo.png"></a>
			</article>
			<article>
				<input type="checkbox" name="btnmenu" class="btnmenu">
				<div class="btn-menu"><i class="fa fa-bars"></i><i class="fa fa-times"></i> menu</div>
				<ul id="menu">
					<li><a href="../index.php">inicio</a></li>
					<li><a href="../about.php">nosotros</a></li>
					<li><a href="../index.php#brands">marcas</a></li>
					<li><a href="#products">productos</a></li>
					<li><a href="../garantia-servicios.php">garantía y servicios</a></li>
					<li><a href="../index.php#psale">puntos de venta</a></li>
					<li><a href="#contact">contacto</a></li>
				</ul>
			</article>
		</div>
	</header>
	<main>
		<section id="bannersecond" class="center"></section>
		<section id="allproducts">
			<article class="title center">
				<div id="wrapper">
					<h3>Proceso Smaw</h3>
				</div>
			</article>
			<article class="center">
				<div id="wrapper">
					<div class="regular slider">
						<?$id = $_REQUEST["id"];
						$sqlstr="select * from saprocesostick order by codigo desc limit 1";
						$filas = mysqli_query($conexion, $sqlstr);
						while ($fila = mysqli_fetch_array($filas)){?>
							<div class="prod">
								<?$id=$fila['codigo'];?>
								<a href="proceso-stick.php?id=<?echo$fila['codigo'];?>#details">
									<div class="content">
										<h3><?echo$fila['namereco'];?></h3>
									</div>
									<div class="img">
										<img src="../img/productos/proceso-stick/<?echo$fila['img'];?>.png">
										<o>leer más</o>
									</div>
								</a>
							</div>
						<? }?>
						<?$id = $_REQUEST["id"];
						$sqlstr="select * from saprocesostick order by codigo asc limit 14";
						$filas = mysqli_query($conexion, $sqlstr);
						while ($fila = mysqli_fetch_array($filas)){?>
							<div class="prod">
								<?$id=$fila['codigo'];?>
								<a href="proceso-stick.php?id=<?echo$fila['codigo'];?>#details">
									<div class="content">
										<h3><?echo$fila['namereco'];?></h3>
									</div>
									<div class="img">
										<img src="../img/productos/proceso-stick/<?echo$fila['img'];?>.png">
										<o>leer más</o>
									</div>
								</a>
							</div>
						<? }?>
					</div>
				</div>
			</article>
		</section>
		<section id="products">
			<article class="title center">
				<div id="wrapper">
					<h3>categoría de productos</h3>
				</div>
			</article>
			<article class="center">
				<div id="wrapper" class="columns">
					<ul>
						<li><img src="../img/productos/categoria/proceso-arco-manual.png"> <a href="proceso-stick-all.php">Proceso SMAW (Electrodo)</a></li>
						<li><img src="../img/productos/categoria/proceso-mig.png"> <a href="proceso-mig-all.php">Proceso GMAW (MIGMAG/FCAW)</a></li>
						<li><img src="../img/productos/categoria/multiprocesos.png"> <a href="multiproceso-all.php">Multiprocesos (SMAW/GMAW/GTAW/FCAW)</a></li>
						<li><img src="../img/productos/categoria/bateria.png"> <a href="cargadores-all.php">Cargadores de Batería</a></li>
					</ul>
					<ul>
						<li><img src="../img/productos/categoria/proceso-tig.png"> <a href="proceso-tig-all.php">Proceso TIG (GTAW)</a></li>
						<li><img src="../img/productos/categoria/alimentadores.png"> <a href="alimentadores-all.php">Alimentadores</a></li>
						<!--<li><img src="img/productos/categoria/repuestos.png"> <a href="">repuestos</a></li>-->
						<li><img src="../img/productos/categoria/accesorios.png"> <a href="accesorios-all.php">Accesorios</a></li>
					</ul>
				</div>
			</article>
		</section>
		<section id="contact">
			<article class="title center">
				<div id="wrapper">
					<h3>contacto fábrica</h3>
				</div>
			</article>
			<article class="center">
				<div id="wrapper" class="columns">
					<div>
						<p>Central Telefónica:</p>
						<p class="second"><i class="fa fa-phone"></i> (01)-3623857</p>
						<a href="../contacto.php" style="font-weight: bolder;">
							<p><b>Escríbenos</b> (Haz Click Aquí)</p>
							<p class="second"><b><i class="fa fa-envelope"></i> soldadoras@soldadorasandinas.com</b></p>
						</a>
						<a href="https://www.facebook.com/solandinas/" target="_blank">
							<p>Encuéntranos en Facebook</p>
							<p class="second"><i class="fa fa-facebook"></i> /Solandinas</p>
						</a>
					</div>
					<div>
						<ul>
							<li>Ubicación Planta de Fabricación</li>
							<li>Av. Bolognesi #510 Carretera Central Km. 0.500 Santa Anita. Lima, Perú</li>
						</ul>
						<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9329.13705318577!2d-76.9762053998119!3d-12.054764722840575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c661517cf0eb%3A0x6a345de1cacaea0f!2sBolognesi+510%2C+Santa+Anita+15008!5e0!3m2!1ses-419!2spe!4v1485315218128" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
					</div>
				</div>
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
<script src="../js/desplazamiento.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
</html>
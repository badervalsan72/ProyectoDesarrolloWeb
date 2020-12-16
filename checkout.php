<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<?php
		include "header.php";
		?>

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Finalizar Orden</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<form action="includes/checkout-inc.php" method="POST" name="sentMessage" id="contactForm" novalidate>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="block-heading-two">
								<h3><span>Pasos para completar orden:</span></h3>
							</div>
							<div class="tab-section">
								<div class="s12">
									<ul class="tabs">
										<li class="tab col s6"><a href="#test2" class="waves-effect waves-dark active">Método de pago</a></li>
										<li class="tab col s6"><a href="#test1" class="waves-effect waves-dark">Direccion de entrega</a></li>
										<!-- <li class="tab col s4"><a href="#test3" class="waves-effect waves-dark">Confirmación</a></li>  -->
									</ul>
								</div>
								<div id="test1" class="col s12 container ">
									<div class="col-md-6">
										<div class="input-field">
											<input type="text" class="form-control" id="direccion" name="direccion-checkout" required data-validation-required-message="Por favor introduzca su direccion exacta" />
											<label for="user" class=""> Dirección Exacta </label>
										</div>
										<div class="input-field">
											<input type="number" class="form-control" id="telefono" name="telefono-checkout" required data-validation-required-message="Por favor introduzca su numero de teléfono" />
											<label for="user" class=""> Número de teléfono </label>
										</div>
									</div>
								</div>
								<div id="test2" class="col s12 container">
									<div class="col-md-10">
										<div class="input-field">
											<input type="text" class="form-control" id="titular" name="name-checkout" required data-validation-required-message="Por favor introduzca el nombre del titular" />
											<label for="user" class=""> Nombre del titular de la tarjeta</label>
										</div>
										<div class="input-field">
											<input type="number" class="form-control" id="numero" name="numero-checkout" required data-validation-required-message="Por favor introduzca su número de tarjeta" />
											<label for="user" class=""> Número de la tarjeta</label>
										</div>
										<div class="input-field">
											<input type="number" class="form-control" id="csv" name="csv-checkout" required data-validation-required-message="Por favor introduzca el código de seguridad" />
											<label for="user" class=""> Código de seguridad </label>
										</div>

										<div class="input-field">
											<input type="date" class="form-control" id="date" name="date-checkout" required data-validation-required-message="Por favor introduzca la fecha de expiración" />
											<label for="user" class=""></label>
										</div>
									</div>
								</div>
								<div id="test3" class="col s12 container">
									<button type="submit" name="submit" class="btn btn-primary waves-effect waves-dark pull-center">Completar</button>
								</div>
							</div>
						</div>
					</div>
			</form>
		</section>
		<?php
		if (isset($_GET["error"])) {
			switch ($_GET["error"]) {
				case "invalidCard":
					echo "<script type='text/javascript'>alert('Su tarjeta no es válida!');</script>";
					break;

				case "TransaccionExitosa":
					echo "<script type='text/javascript'>alert('TRANSACCION EXITOSA!');</script>";
					break;

				case "NoMoney":
					echo "<script type='text/javascript'>alert('Saldo Insuficiente');</script>";
					break;

				default:
					break;
			}
		}
		?>

		<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
		<!-- javascript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="materialize/js/materialize.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="js/jquery.fancybox-media.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/animate.js"></script>
		<!-- Vendor Scripts -->
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/animate.js"></script>
		<script src="js/custom.js"></script>
</body>

</html>
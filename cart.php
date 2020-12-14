<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Carrito de Compras</title>
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
		include "includes/dbh-inc.php";
		include "includes/functions-inc.php";
		?>


		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">¿Qué estás por comprar?</h2>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<section class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Accordion starts -->
							<div class="panel-group" id="accordion-alt3">
								<!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								<?php
								if (isset($_SESSION["productList"])) {   
									$total = mostrarCarrito($conn, $_SESSION['productList']);
								} else {
									//echo "<script type='text/javascript'>alert('Primero debe de elegir productos!');</script>";

									header("location: order.php?error=NoProductList"); //Si comento esto, sale el boton que de otra forma no sale
								}
								?>

							</div>
							
							<div class="col-md-6">
								<div class="about-text">
									<h3>Total: <span class="color"> <?php echo $total ?> </span></h3>

									<button type="submit" style="margin:10px" class="btn btn-primary waves-effect waves-dark pull-center">Proceder</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>


	</div>
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
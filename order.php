<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet" />

	<!-- Vendor Styles -->
	<link href="css/magnific-popup.css" rel="stylesheet">
	<!-- Block Styles -->
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/gallery-1.css" rel="stylesheet">

</head>

<body>
	<div id="wrapper">

		<?php
		include "header.php";
		include "includes/dbh-inc.php";
		include "includes/functions-inc.php";
		?>

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Productos</h2>
					</div>
				</div>
			</div>
		</section>

		<!-- Start Gallery 1-2 -->
		<section id="gallery-1" class="content-block section-wrapper gallery-1">
			<div class="container">

				<div class="editContent">
					<ul class="filter">
						<li class="active"><a href="#" data-filter="*">Todos</a></li>
						<li><a class="waves-effect waves-dark" href="#" data-filter=".dulce">Productos Dulces</a></li>
						<li><a class="waves-effect waves-dark" href="#" data-filter=".salado">Productos Salados</a></li>
					</ul>
				</div>
				<!-- /.gallery-filter -->

				<div class="row">
					<div id="isotope-gallery-container">
						<!-- aquí empieza para cada producto -->
						<?php
							mostrarProductos($conn, 0); //dulce 
						?> 

						<div id="isotope-gallery-container">
							<?php
								mostrarProductos($conn, 1); 
							?> 

							
						</div>
						<!-- /.isotope-gallery-container -->
					</div>
					<!-- /.row -->
					<!-- /.container -->
				</div>
		</section>
		<!--// End Gallery 1-2 -->
	</div>

	</div>
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
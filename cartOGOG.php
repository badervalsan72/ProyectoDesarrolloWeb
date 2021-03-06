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
								<div class="panel">
									<!-- Panel heading -->
									<div class="panel-heading">
										<h4 class="panel-title">
											<!-- <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> 
												<i class="fa fa-angle-right"></i> Producto 1
											</a> --> Producto 1
										</h4>
									</div>
									<div id="collapseOne-alt3" class="panel">
										<!-- Panel body -->
										<div class="panel-body">
											<div class="col-md-6">
												<div class="gallery-item">
													<div class="gallery-thumb">
														<img src="img/works/1.png" class="img-responsive" alt="1st gallery Thumb">
													</div>
													<div class="editContent">
														<h5>Dona con glaseado azucarado</h5>
														<p>₡5000</p>
													</div>
													<button type="submit" style="margin:10px;" class="btn btn-primary waves-effect waves-dark pull-center">Eliminar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel">
									<!-- Panel heading -->
									<div class="panel-heading">
										<h4 class="panel-title">
											<!-- <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">  
												<i class="fa fa-angle-right"></i> Producto 2 -->
											Producto 2
											</a>
										</h4>
									</div>
									<div id="collapseTwo-alt3" class="panel">
										<!-- Panel body -->
										<div class="panel-body">
											<div class="col-md-6">
												<div class="gallery-item">
													<div class="gallery-thumb">
														<img src="img/works/1.png" class="img-responsive" alt="1st gallery Thumb">
													</div>
													<div class="editContent">
														<h5>Dona con glaseado azucarado</h5>
														<p>₡5000</p>
													</div>
													<button type="submit" style="margin:10px;" class="btn btn-primary waves-effect waves-dark pull-center">Eliminar</button>
												</div>
											</div>
										</div>
									</div>
								</div>


							</div>
							<div class="col-md-12 text-center">
								<div class="about-text">
									<h3>Total: <span class="color"> [MONTO] </span></h3>

									<button type="submit" style="margin:10px" class="btn btn-primary waves-effect waves-dark pull-center">Proceder</button>
								</div>
							</div>
						</div>
					</div>
				</div>
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
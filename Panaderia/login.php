<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Iniciar Sesión </title>
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
						<h2 class="pageTitle">Iniciar Sesión - Registro</h2>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p> </p>
						<!-- Form itself -->
						<form action="includes/login-inc.php" method="POST" name="sentMessage" id="contactForm" novalidate>
							<div class="input-field">
								<input type="email" class="form-control" id="email" name="email_login" required data-validation-required-message="Por favor introduzca su correo"/>
								<label for="email" class=""> Email </label>
							</div>
							<div class="input-field">
								<input type="password" name="password" class="form-control" id="password" name="password_login" required data-validation-required-message="Por favor introduzca su contraseña" />
								<label for="password" class=""> Contraseña </label>
								<p class="help-block"></p>
							</div>
							<div id="success">
								<!-- For success/fail messages -->
							</div>
							<button type="submit" style="margin:5px;" name="submit" class="btn btn-primary waves-effect waves-dark ">Ingresar</button>
						</form>
					</div>

					<div class="col-md-6">
						<p> </p>
						<!-- Form itself -->
						<form action="includes/signup-inc.php" method="POST" name="sentMessage" id="contactForm" novalidate>
							<div class="input-field">
								<input type="text" class="form-control" id="cedula" name="cedula_signup" required data-validation-required-message="Por favor introduzca su cédula" />
								<label for="user" class=""> Cédula </label>
							</div>
							<div class="input-field">
								<input type="text" class="form-control" id="user" name="name_signup" required data-validation-required-message="Por favor introduzca su nombre" />
								<label for="user" class=""> Nombre </label>
							</div>
							<div class="input-field">
								<input type="text" class="form-control" id="apellido1" name="apellido1_signup" required data-validation-required-message="Por favor introduzca su primer apellido" />
								<label for="user" class=""> Apellido 1 </label>
							</div>
							<div class="input-field">
								<input type="text" class="form-control" id="apellido2" name="apellido2_signup" required data-validation-required-message="Por favor introduzca su segundo apellido" />
								<label for="user" class=""> Apellido 2 </label>
							</div>
							<div class="input-field">
								<input type="email" class="form-control" id="email2" name="email_signup" required data-validation-required-message="Por favos introduzca su correo" />
								<label for="email2" class=""> Correo Electrónico </label>
							</div>
							<div class="input-field">
								<input type="password" name="password_signup1" class="form-control" id="password2" required data-validation-required-message="Por favor introduzca su contraseña" />
								<label for="password2" class=""> Contraseña </label>
								<p class="help-block"></p>
							</div>
							<div class="input-field">
								<input type="password" name="password_signup2" class="form-control" id="password3" required data-validation-required-message="Por favor repita su contraseña" />
								<label for="password3" class=""> Repetir contraseña </label>
								<p class="help-block"></p>
							</div>

							<div id="success">
								<!-- For success/fail messages -->
							</div>
							<button type="submit" name="submit" class="btn btn-primary waves-effect waves-dark pull-right">Registrarse</button>
							<br />
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?php
    // ERRORES DEL SIGNUP
    if (isset($_GET["error"])) {
		switch($_GET["error"]) {
			case "emptyinput":
				echo "<script type='text/javascript'>alert('Por favor, rellene los espacios!');</script>";
				break;
			case "invaliduid":
				echo "<script type='text/javascript'>alert('Por favor, elija un usuario correcto!');</script>";
				break;
			case "invalidemail":
				echo "<script type='text/javascript'>alert('!');</script>";
				break;
			case "passwordsdontmatch":
				echo "<script type='text/javascript'>alert('Usuario registrado!');</script>";
				break;
			case "stmtfailed":
				echo "<script type='text/javascript'>alert('Algo salió mal!');</script>";
				break;
			case "usernametaken":
				echo "<script type='text/javascript'>alert('El usuario ya existe!');</script>";
				break;
			case "none":
				echo "<script type='text/javascript'>alert('Usuario registrado!');</script>";
				break;
			case "uidlength":
				echo "<script type='text/javascript'>alert('Su cédula debe tener 9 dígitos!');</script>";
				break;
			default:
				break;
		}
		/*
      if ($_GET["error"] == "emptyinput") {
        echo "<script type='text/javascript'>alert('Por favor, rellene los espacios!');</script>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<script type='text/javascript'>alert('Por favor, elija un usuario correcto!');</script>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<script type='text/javascript'>alert('!');</script>";
      } 
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<script type='text/javascript'>alert('Usuario registrado!');</script>";
      } 
      else if ($_GET["error"] == "stmtfailed") {
        echo "<script type='text/javascript'>alert('Algo salió mal!');</script>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<script type='text/javascript'>alert('El usuario ya existe!');</script>";
      }
      else if ($_GET["error"] == "none") {
        echo "<script type='text/javascript'>alert('Usuario registrado!');</script>";
      }
      else if ($_GET["error"] == "uidlength") {
        echo "<script type='text/javascript'>alert('Su cédula debe tener 9 dígitos!');</script>";
      } */
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

	<script src="contact/jqBootstrapValidation.js"></script>
	<script src="contact/contact_me.js"></script>
</body>

</html>
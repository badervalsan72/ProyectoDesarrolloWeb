<?php

// Check for empty input signup
function emptyInputSignup($cedula, $name, $email, $apellido1, $apellido2, $pwd, $pwd2)
{
	$result;
	if (empty($cedula) || empty($name) || empty($email) || empty($apellido1) || empty($apellido2) || empty($pwd) || empty($pwd2)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

// Check invalid username
function invalidUid($cedula)
{
	$result;
	if (!preg_match("/^[0-9]*$/", $cedula)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

// Check invalid email
function invalidEmail($email)
{
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

// Check if passwords matches
function pwdMatch($pwd, $pwd2)
{
	$result;
	if ($pwd !== $pwd2) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

//Checks if uid length is the correct length
function uidlength($cedula)
{
	$result;
	if ((strlen(strval($cedula))) !== 9) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

// Check if username is in database, if so then return data
function uidExists($conn, $email)
{
	$sql = "SELECT * FROM Usuarios WHERE Correo = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailedExistingUser");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	// "Get result" returns the results from a prepared statement
	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

//Insert new user into database

// function createUser($conn, $name, $email, $uid, $pwd, $apellido1, $apellido2, $rol, $departamento) {

function createUser($conn, $cedula, $name, $email, $apellido1, $apellido2, $pwd)
{
	// id, nombre, ap1, ap2, pwd, desc, correo
	$sql = "INSERT INTO Usuarios (ID, Nombre, Apellido1, Apellido2, Contrasena, Descuento, Correo) VALUES (?, ?, ?, ?, ?, ?, ?);";
	$descuento = 0;
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../login.php?error=stmtfailedNewUser");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	// mysqli_stmt_bind_param($stmt, "ssisssis", $name, $email, $uid, $hashedPwd, $apellido1, $apellido2, $rol, $departamento);
	mysqli_stmt_bind_param($stmt, "issssis", $cedula, $name, $apellido1, $apellido2, $hashedPwd, $descuento, $email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../login.php?error=none");
	exit();
}

// Check for empty input login
function emptyInputLogin($uid, $pwd)
{
	$result;
	if (empty($uid) || empty($pwd)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

// Log user into website
function loginUser($conn, $email, $pwd)
{
	$uidExists = uidExists($conn, $email);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["Contrasena"];
	echo "<p>pwdHashed: $pwdHashed</p>";
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wrongpassword");
		exit();
	} else if ($checkPwd === true) {
		session_start();
		$_SESSION["email"] = $email;
		header("location: ../index.php?error=none");

		exit();
	}
}

function realizarSolicitud($conn, $uid, $link, $descripcion, $costo, $razonCompra)
{

	$sql = "INSERT INTO Solicitudes (ID_Usuario, Link, Descripcion, Monto, RazonDeCompra, ID_Estado) VALUES (?, ?, ?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../realizarSolicitud.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ississ", $uid, $link, $descripcion, $costo, $razonCompra, $estado);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../realizarSolicitud.php?error=none");
	exit();
}

function mostrarProductos($conn)
{
	// $value se encarga de decidir qué mostrar. // 0 Dulce, 1 Salado, 2 todo.

	$sql = "SELECT * FROM Productos";

	$result = mysqli_query($conn, $sql);
	// echo "<p> $result </p>";

	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {

			//Verifica que tipo de pan es

			$tipo;
			if ($row["Tipo"] == 0) {
				$tipo = "dulce";
				echo "<div class='col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper dulce'>";
			} else if ($row["Tipo"] == 1) {
				$tipo = "salado";
				echo "<div class='col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper salado'>";
			}

			// echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
?>
			<!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper"> -->
			<div class="gallery-item">
				<div class="gallery-thumb">
					<img src="<?php echo $row["NombreImagen"] ?>" class="img-responsive" alt="1st gallery Thumb">
					<div class="image-overlay"></div>
					<a href="<?php echo $row["NombreImagen"] ?>" class="gallery-zoom"><i class="fa fa-eye"></i></a>

				</div>
				<div class="gallery-details">
					<div class="editContent">
						<h5> <?php echo $row["Nombre"] ?> </h5>
					</div>
					<div class="editContent">
						<p style="text-align:center"> <?php echo "₡", $row["PrecioUnitario"] ?> </p>
						
					</div>
					<button type="submit" name="catchItemID" value="<?php echo $row["ID"] ?>" style="margin:10px;" class="btn btn-primary waves-effect waves-dark pull-center">Comprar</button>
				</div>
			</div>
			</div>
		<?php
		}
	} else if (mysqli_num_rows($result) == false) {
		echo "<p> FALSO </p>";
	}

	mysqli_close($conn);
	exit();
	/*
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../order.php?error=stmtfailed");
		exit();
	}

	// mysqli_stmt_bind_param($stmt, "ississ", $uid, $link, $descripcion, $costo, $razonCompra, $estado);
	mysqli_stmt_execute($stmt);
	$resultData = mysqli_stmt_get_result($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	exit(); 	*/
}

function mostrarCarrito($conn, $arr)
{
	// session_start();

	// echo "<p> $result </p>";
	$tempArray = $arr;
	// $tempArray2 = $tempArray; 
	$total = 0;  // la función retorna este valor.

	require_once "includes/cart-inc.php";

	for ($i = 1; $i < sizeof($tempArray); $i++) {

		$id = $tempArray[$i];
		if ($id > 0) {
			$sql = "SELECT * FROM Productos where ID=$id";

			$result = mysqli_query($conn, $sql);

			$row = mysqli_fetch_assoc($result); // si falla, poner dentro de while

			// hay un problema con la lógica, el problema está en el for externo y el cómo aumenta i y disminuye el sizeof

			if (isset($_POST['eliminar' . $row["ID"]])) {
				eliminar($i);
				
			} else {
				
			}
		?>
			<form action="" method="POST" novalidate>
				<div class="panel-group" id="accordion-alt3">
					<!-- Panel body -->
					<div class="panel-body">
						<div class="col-md-6">
							<div class="col-md-8">
								<div class="gallery-item">
									<div class="gallery-thumb">
										<img src="<?php echo $row["NombreImagen"] ?>" class="img-responsive" alt="1st gallery Thumb">
									</div>
								</div>
							</div>
							<div class="col-md-4" style="float: right;">
								<h5><?php echo $row["Nombre"] ?> </h5>
								<p><?php echo "Precio Unitario: ₡", $row["PrecioUnitario"] ?></p>

								<?php
								$cantidadProducto = 0;

								for ($j = 1; $j < sizeof($tempArray); $j++) {
									$jd = $tempArray[$j];
									if ($id == $jd) {
										// echo "<p> $id es igual a $jd </p>";
										// |echo "<p> cambiando $tempArray[$j] a 0 </p>";
										$tempArray[$j] = 0;
										$cantidadProducto++;
									}
								}
								$subtotal = $row["PrecioUnitario"] * $cantidadProducto;
								$total += $subtotal;
								?>
								<p><?php echo "Cantidad seleccionada: " . $cantidadProducto ?></p>
								<p><?php echo "Subtotal: ₡" . $subtotal ?></p>
								<button type="submit" style="margin:10px;" class="btn btn-primary waves-effect waves-dark pull-center" name="<?php echo "eliminar" . $row["ID"] ?>" id="<?php echo "eliminar" . $row["ID"] ?>">
									Eliminar
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>

			<?php
		}
	}
	?>
	<div class="col-md-4" style="background-color: #de8c63">
		<div class="about-text">
			<h3 style="color: white;">Resumen</h3>
			<hr style="border-color: white">
			<h5 style="color: white;">Total: <?php echo $total ?></h4>
				<hr style="border-color: white">
				<form action="checkout.php">
					<button type="submit" style="margin:10px" class="btn btn-primary waves-effect waves-dark pull-center">Proceder</button>
				</form>
		</div>
	</div>
	<?php
	

	$_SESSION["total"] = $total;

	mysqli_close($conn);
	exit();
	return $total;
}

/*function verif_Tarjeta($conn, $num_tarjeta, $titular, $csv, $fecha)
{
	// $sql = "SELECT * FROM Usuarios WHERE Correo = ?;";
	$sql = "SELECT * FROM Tarjetas where ID = ? AND TITULAR = ? AND CSV = ? AND FECHAVENCIMIENTO = ?";

	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../checkout.php?error=stmtfailedforCard");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "isis", $num_tarjeta, $titular, $csv, $fecha);
	mysqli_stmt_execute($stmt);


	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		
		if ($row["Saldo"] > $_SESSION["total"]) {
			
			$total = $_SESSION["total"]; 
			
			$updateTarjeta = "UPDATE Tarjetas SET Saldo -= $total WHERE ID = $num_tarjeta"; 
			$i = 1;

			$stmt2 = mysqli_stmt_init($conn);
			
			do {
				$tempQuery = "SELECT * FROM Ordenes WHERE ID = $i" ;
				$resultTempQuery = mysqli_query($conn, $tempQuery);

				if (mysqli_num_rows($resultTempQuery) == 0) {
					$CreateOrdenQuery = "INSERT INTO Ordenes (ID, CorreoUsuario, Fecha, EstadoEntrega) VALUES (?, ?, ?, ?); ";
					
					if (!mysqli_stmt_prepare($stmt2, $CreateOrdenQuery)) {
						header("location: ../checkout.php?error=stmtfailedCreateOrder");
						exit();
					}
					$email = $_SESSION["email"]; 
					$currentDateTime = date('Y-m-d');
					$zero = 0; 
					mysqli_stmt_bind_param($stmt2, "issi", $i, $email, $currentDateTime, $zero); 
					mysqli_stmt_execute($stmt2);
					mysqli_stmt_close($stmt2);
					
					// exit(); 					
				}
				else {
					$i++; 
				}
			}
			while (mysqli_num_rows($resultTempQuery) == 0);
			
			$stmt3 = mysqli_stmt_init($conn);
			$products = $_SESSION["productList"]; 
			for ($x = 1; $x < sizeof($products); $x++) {
				
				$idProducto = $products[$x];
				if ($idProducto > 0) {

					$cantidadProductoOE = 0;

					for ($z = 1; $z < sizeof($products); $z++) {
						$zd = $products[$z];
						if ($idProducto == $zd) {
							
							$products[$z] = 0;
							$cantidadProductoOE++;
						}
					}
					$insertOrdenEsp = "INSERT INTO OrdenEsp (IDOrden, IDProducto, Cantidad) VALUES (?, ?, ?);"; 

					
					if (!mysqli_stmt_prepare($stmt3, $insertOrdenEsp)) {
						header("location: ../login.php?error=stmtfailedInsertOrdenEsp");
						exit();
					}
					$IDORden = $i . $x; 
					mysqli_stmt_bind_param($stmt3, "iii", $IDORden, $idProducto, $cantidadProductoOE);
					mysqli_stmt_execute($stmt3);
					mysqli_stmt_close($stmt3);
					header("location: ../checkout.php?error=ProductosAgregadosAOrdenEspecial");
					exit();

				} 
			 
			
			}
			header("location: ../checkout.php?error=TransaccionExitosa");
		}
		else {
			header("location: ../checkout.php?error=NoMoney");
		}
		
		exit();
	} else {
		$result = false;
		header("location: ../checkout.php?error=invalidCard");
		exit();
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

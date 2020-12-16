<?php

if (isset($_POST["submit"])) {

  $cedula = $_POST["cedula_signup"]; 
  $name = $_POST["name_signup"];
  $email = $_POST["email_signup"]; 
  $apellido1 = $_POST["apellido1_signup"]; 
  $apellido2 = $_POST["apellido2_signup"]; 
  $pwd = $_POST["password_signup1"];
  $pwd2 = $_POST["password_signup2"];

  require_once "dbh-inc.php";
  require_once 'functions-inc.php';
  
  if (emptyInputSignup($cedula, $name, $email, $apellido1, $apellido2, $pwd, $pwd2) !== false) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($cedula) !== false) {
    header("location: ../login.php?error=invaliduid");
		exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ../login.php?error=invalidemail");
		exit();
  }
  if (pwdMatch($pwd, $pwd2) !== false) {
    header("location: ../login.php?error=passwordsdontmatch");
		exit();
  }


  //MÉTODO QUE REVISA QUE LA CEDULA TENGA 9 O MENOS CARACTERES
  if (uidlength($cedula) !== false) {
    header("location: ../login.php?error=uidlength");
		exit();
  }
  /* Is the username taken already
  if (uidExists($conn, $cedula) !== false) {
    header("location: ../login.php?error=usernametaken");
		exit();
  }*/

  //Verificamos que no sea una multicuenta usando el mismo correo
  if (uidExists($conn, $email) !== false) {
    header("location: ../login.php?error=UserAlredyExists");
    exit();
  }

  // Now we insert the user into the database
  createUser($conn, $cedula, $name, $email, $apellido1, $apellido2, $pwd);
  

} else {
	header("location: ../login.php?error=nosubmit");
    exit();
}
<?php
// include_once "../view/navPad2.php";

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$email = $_POST["email"];
$departamento = $_POST["departamento"];
$rol = $_POST["rol"];
$password = $_POST["password"];

require 'config.php';
require 'functions.php';

echo "Hola, adduser-include";

if (invalidUserName($nombre) !== false) {
    $message = "El nombre del usuario debe llevar al menos 1 minúscula, 1 mayúscula y 1 número";
    function_alert($message);
    header("location: ../?c=AddUserController");
    exit();
}

if (userNameExists($CONN, $cedula, $email) !== false) {
    $message = "Este usuario y este correo ya existen, el correo debe de ser otro";
    function_alert($message);
    header("location: ../?c=AddUserController");
    exit();
} 

createUser($CONN, $cedula, $nombre, $apellido1, $apellido2, $email, $departamento, $rol, $password);

/*if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../adduser-include.php?error=pwdDontMatch");
    exit();
}*/

function function_alert($message)
{
    echo 'no funciona'; 
    echo "<script type='text/javascript'>alert('$message')</script>";
}

<?php

if (isset($_POST["submit"])) {
    $num_tarjeta = $_POST["numero-checkout"];
    $titular = $_POST["name-checkout"];
    $csv = $_POST["csv-checkout"];
    $tel = $_POST["telefono-checkout"];
    $direccion = $_POST["direccion-checkout"];
    $fecha = $_POST["date-checkout"];

    require_once "dbh-inc.php";
    require_once 'functions-inc.php';

    

} else {
    header("location: ../login.php?error=nosubmit");
    exit();
}

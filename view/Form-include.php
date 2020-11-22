<?php
include_once "view/navPad2.php";

$userID = $_POST["ID"];
$link = $_POST["link"];
$descripcion = $_POST["descripcion"];
$costo = $_POST["costo"];
$razonCompra = $_POST["razonCompra"];
$estado = $_POST["estado"];

require 'config.php';
require 'functions.php';

crearSolicitud($userID, $link, $descripcion, $costo, $razonCompra, $estado);


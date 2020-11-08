<?php
include  "model/usuario.php";

if($_POST){
    $usuario = new usuario($_POST["username"],$_POST["password"],
    $_POST["genero"],$_POST["nombre"]);

$usuario->create();

$rows = $usuario->read();

include "view/View_All.php";

}else{
    include "view/MainPage.php";
}

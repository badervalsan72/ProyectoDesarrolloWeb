<?php
session_start();

if (isset($_POST["catchItemID"])) {

    $id = $_POST["catchItemID"];
    $_SESSION['productList'][0] = 'NULL';
    array_push($_SESSION['productList'], $_POST['catchItemID']); 
    /* echo "<pre>"; 
    print_r($_SESSION['productList']); 
    echo "</pre>";
*/ 
    //$id = 0;
    header("location: ../order.php");
    
} else {
    header("location: ../login.php");
    exit();
}




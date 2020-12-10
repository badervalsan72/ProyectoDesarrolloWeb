<?php
session_start();

if (isset($_POST["catchItemID"])) {

    $id = $_POST["catchItemID"];
    $_SESSION['productList'][0] = ' ';
    array_push($_SESSION['productList'], $_POST['catchItemID']);

    //$id = 0;

} else {
    header("location: ../login.php");
    exit();
}

?>
<p>id: <?php echo $id ?> </p>

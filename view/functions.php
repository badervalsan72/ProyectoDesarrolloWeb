<?php

function invalidUserName($nombre)
{
    $result = null;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $nombre)) { //Algoritmo que busca y compara caracteres en el lugar especificado.
        $result = true;
    } else {
        $result = false;
    }
}

/*function userIDExists($CONN)
{
    $number = mt_rand(100000000, 999999999);
    $sql = "SELECT * FROM usuarios WHERE  ID = ?;";
    $stmt = mysqli_stmt_init($CONN);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        userIDExists($CONN);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $number);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        if (mysqli_fetch_assoc($resultData)) {
            //No poner codigo aqui
        } else {
            return $number;
        }

        mysqli_stmt_close($stmt);
    }
}*/

function userNameExists($CONN, $userID, $email)
{
    $sql = "SELECT * FROM usuarios WHERE ID = ? OR CORREO = ?;";
    $stmt = mysqli_stmt_init($CONN);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adduser-include.php?error=stmtfailed");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "is", $userID, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }
}

function createUser($CONN, $userID, $nombre, $apellido1, $apellido2, $email, $departamento, $rol, $password)
{
    //$userID = userIDExists($CONN);
    $sql = "INSERT INTO usuarios (ID, Nombre, Apellido1, Apellido2, Departamento, Contraseña, ID_Rol, Correo) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    //($userID, $nombre, $apellido1, $apellido2, $email, $departamento, $rol, $password) params
    $stmt = mysqli_stmt_init($CONN);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../adduser-include.php?error=stmtfailed");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "isssssss", $userID, $nombre, $apellido1, $apellido2, $email, $departamento, $rol, $passwordl);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $message = "Usuario creado exitosamente!";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        header("location: ../adduser-include.php?error=none");
        exit();
    }
}

/*function pwdMatch($pwd, $pwdRepeat) {
    $result = null;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
}*/

/*function function_alert($message)
{

    // Display the alert box; note the Js tags within echo, it performs the magic
    echo "<script type='text/javascript'>alert('$message');</script>";
} */

function crearSolicitud($userID, $CONN, $link, $descripcion, $costo, $razonCompra, $estado){
    //$userID = userIDExists($CONN);
    $sql = "INSERT INTO solicitudes (ID_Usuario, Link, Descripcion, Monto, RazonDeCompra, ID_Estado) 
    VALUES (?, ?, ?, ?, ?, ?);";
    
    $stmt = mysqli_stmt_init($CONN);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../realizarSolicitud.php?error=stmtfailed");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "issisi", $userID, $link, $descripcion, $costo, $razonCompra, $estado);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
    }
}




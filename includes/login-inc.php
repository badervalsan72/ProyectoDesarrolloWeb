<?php

if (isset($_POST["submit"])) {

  $email = $_POST["email_login"];
  $pwd = $_POST["password_login"];



  require_once "dbh-inc.php";
  require_once 'functions-inc.php';

  if (emptyInputLogin($email, $pwd) === true) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }


  loginUser($conn, $email, $pwd);

} else {
  header("location: ../login.php?error=nosubmit");
  exit();
}

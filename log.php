<?php
session_start();
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $_SESSION["username"] = 'AYEYE BRAZORF';
}
if($validUser) {
    header("Location: /home.php"); die();
} else {
    header("Location: /login.html"); die();
}
?>


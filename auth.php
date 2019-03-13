<?php
session_start();
$email=$_SESSION["email"];
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>

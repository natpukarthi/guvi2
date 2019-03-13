<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guvi Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="favicon" type="image/png" href="img/favicon.png"/>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section align="center">
		<img src="img/logo.jpg" class="img-responsive" title="Guvi" alt="Guvi logo"><br><br>
	</section>
  <?php
session_start();
include_once('db.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
$stmt->execute([$email, $password]); 
$user = $stmt->fetch();
if (!$user) {
	echo "<div align='center' class='alert alert-danger' role='alert'>Username/Password doesn't exist.<a href='login.php'>Back to Login</a></div>";
}
else {
	$_SESSION['email'] = $email;
	header("Location: index.php");	
}
}
$conn = null;
?>
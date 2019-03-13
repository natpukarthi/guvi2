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
include_once('db.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]); 
$user = $stmt->fetch();
if ($user) {
			echo "<div align='center' class='alert alert-danger' role='alert'>Email already in our database.
			Please <a href='register.php'>Choose another id</a></div>";
}
else {
	try {
			$sql = "INSERT INTO users (email, password) VALUES (?,?)";
			$stmt= $conn->prepare($sql);
			$stmt->execute([$email, $password]);
			echo "<div align='center' class='alert alert-success' role='alert'>Thank you for registering with us.
			Please <a href='login.php'>Login to Continue</a></div>";
		}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
}
$conn = null;
?>
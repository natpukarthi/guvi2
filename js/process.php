<?php
include_once('db.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
try {
		$sql = "INSERT INTO users (email, password) VALUES (?,?)";
		$stmt= $conn->prepare($sql);
		$stmt->execute([$email, $password]);
		echo "Inserted";
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;
?>
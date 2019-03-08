<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guvi Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="favicon" type="image/png" href="img/favicon.png"/>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="js/bootstrap.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div align="center" class="container">
  <section>
  <img src="img/logo.jpg" class="img-responsive" title="Guvi" alt="Guvi logo"><br><br>
  </section>
  <section align="center">
  <img src="img/register.png" class="img-responsive" title="Register" alt="Register"><br><br>
  </section>
  <section>
<form action="process.php" method="POST">
  <table class="table table-bordered">
    <tbody>
		<tr class="">
		<div class="form-group">
		<td bgcolor="" colspan="2"><b>REGISTER WITH US</b></td>
		</tr>
		<tr class="">
		<div class="form-group">
		<td align="right">Email ID:</td>
		<td><input type="email" required autocomplete="off" name="email" class="form-control" id="email"></td>
		</div>
		</tr>
		<tr>
		<div class="form-group">
		<td align="right">Password:</td>
		<td><input type="password" required name="password" minlength="6" class="form-control" id="password" onkeyup="return passwordChanged();"></td>
		</div>
		</tr>
		<tr class="">
		<div class="form-group">
		<td align="right">Confirm Password:</td>
		<td><input type="password" required name="confirm_password" class="form-control" id="confirm_password"><label id="message"></td>
		</div>
		</tr>
		<tr>
		</tr>
		<tr>
		<div class="form-group">
		<td align="right"></td>
		<td><input type="submit" onclick="myFunction()" name="submit" id="enter" class="btn btn-danger" value="Sign Me Up"/></td>
		</div>
		</tr>
		<script src="js/myscript.js"></script>
		<script src="js/myscript2.js"></script>
    </tbody>
  </table>
</form>
  </section>
</div>

</body>
</html>

<?php
include("auth.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guvi Zone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid fixed-top bg-primary py-3">
    <div class="row collapse show no-gutters d-flex h-100 position-relative">
        <div class="col-3 px-0 w-sidebar navbar-collapse collapse d-none d-md-flex">
            <!-- spacer col -->
        </div>
        <div class="col px-3 px-md-0">
            <!-- toggler -->
            <a data-toggle="collapse" href="#" data-target=".collapse" role="button" class="text-white p-1">
                <i class="fa fa-bars fa-lg"></i>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid px-0">
    <div class="row collapse show no-gutters d-flex h-100 position-relative">
<?php include_once('header-menu.php');?>
        <div class="col p-3">
            <h3>Profile Page..</h3>
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" readonly id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Full Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="pwd">Gender:</label><br>
	<input type="radio" name="gender" id="gender"> MALE
	<input type="radio" name="gender" id="gender"> FEMALE
	<input type="radio" name="gender" id="gender"> TRANSGENDER
  </div>
  <div class="form-group">
    <label for="pwd">Date of Birth:</label>
    <input type="date" class="form-control" name="dob" id="dob">
  </div>
  <div class="form-group">
    <label for="pwd">Address:</label>
    <textarea class="form-control" name="address" id="address"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <div class="form-group">
    <label for="pwd">Degree:</label>
    <input type="text" class="form-control" name="degree" id="degree">
  </div>
  <div class="form-group">
    <label for="pwd">Course Name:</label>
    <input type="text" class="form-control" name="course" id="course">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
</div>
</body>
</html>

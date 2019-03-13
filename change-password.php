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
            <h3>Password Change..</h3>
<form action="">
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
</body>
</html>

<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"><meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Welcome to Nonong's Fried Chicken</title>
  	<!-- Bootstrap -->
  	<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
  	<!-- JavaScript -->
  	<script src="js/bootstrap.bundle.min.js"></script>
  	<!-- CSS -->
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<!-- Google Fonts -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,200;0,8..144,300;0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;0,8..144,800;0,8..144,900;1,8..144,100;1,8..144,200;1,8..144,300;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700;1,8..144,800;1,8..144,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.jpg">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row m-5 p-5 justify-content-end">
        <h1>WELCOME TO NONONG'S FRIED CHICKEN</h1>
        <h1>PLEASE SPECIFY IF YOU ARE ADMIN OR STAFF</h1>
      </div>
      <div class="row m-5">
        <div class="col text-center m-2">
          <div class="card bg-warning no-border">
            @if (Route::has('admin-login'))
            <a href="{{ route('admin-login') }}"><h1>Admin</h1></a>
            @endif
          </div>
        </div>
        <div class="col text-center m-2">
          <div class="card bg-danger no-border">
            @if (Route::has('staff-login'))
            <a href="{{ route('staff-login') }}"><h1>Staff</h1></a>
            @endif
          </div>
        </div>
      </div>

    </div>
  </body>
</html>

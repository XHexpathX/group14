<?php
  require 'functions.php';
  require 'constants.php';
  require 'db.php';
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Reel Estate - Canada</title>
      <!-- Css -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="col-md-12">
            <div class="nav">
               <button class="btn-nav">
               <span class="icon-bar inverted top"></span>
               <span class="icon-bar inverted middle"></span>
               <span class="icon-bar inverted bottom"></span>
               </button>
            </div>
            <a class="navbar-brand" href="index.php">
            <img class="logo" src="img/logo.png" alt="logo">
            </a>
            <div class="nav-content hideNav hidden">
               <ul class="nav-list vcenter">
                <?php if($_SESSION["userType"] == 's'): ?>
                  <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="item-anchor" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="item-anchor" href="update-password.php">Update Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="change-password.php">Change Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="admin.php">Admin</a></li>
                  <?php elseif($_SESSION["userType"] == 'a'): ?>
                   <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="item-anchor" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="item-anchor" href="update-password.php">Update Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="change-password.php">Change Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="dashboard.php">Dashboard</a></li>
                  <?php elseif($_SESSION["userType"] == 'c'): ?>
                 <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="item-anchor" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="item-anchor" href="update-password.php">Update Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="change-password.php">Change Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="welcom.php">Welcome</a></li>
                  <?php elseif($_SESSION["userType"] == 'p'): ?>
                    <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="item-anchor" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="item-anchor" href="update-password.php">Update Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="change-password.php">Change Password</a></li>
                  <?php elseif($_SESSION["userType"] == 'd'): ?>
               <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                  <li class="nav-item"><a class="item-anchor" href="logout.php">Logout</a></li>
                  <li class="nav-item"><a class="item-anchor" href="update-password.php">Update Password</a></li>
                  <li class="nav-item"><a class="item-anchor" href="change-password.php">Change Password</a></li>
                  <?php else : ?>    
                   <li class="nav-item"><a class="item-anchor" href="index.php">Home</a></li>
                   <li class="nav-item"><a class="item-anchor" href="login.php">Login</a></li>
                  <li class="nav-item"><a class="item-anchor" href="register.php">Register</a></li>
                <?php endif; ?>
               </ul>
            </div>
         </div>
      </nav>
		<?php ob_start(); ?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> CMS Open dag Aventus </title>
	<!-- Own stylesheet ( via scss) -->
	<link rel="stylesheet" href="css/stylesheet.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

  <nav class="turqoise navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container" id="header_container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <div class="navbar-nav float-left text-left pr-3">
          <a href="index.php" class="navbar-brand" id="logolink">
            <img class="logo img img-fluid" src="images/logo2.png" alt="logo.xd"/></a>
            <ul class="navbar-nav mr-auto">
              <?php if(isset($_SESSION['user'])){?>
              <li><a href="cms.php" class="nav-item active nav-link">CMS</a></li>
              <li><a href="help.php" class="nav-item active nav-link">Help</a></li>
              <li><a class="nav-item active nav-link" href="logout.php">
                Logout
              </a></li>

              <!-- Register form for admins to add other users -->
              <?php if(isset($_SESSION['admin'])){ ?>
              <li><a href="register.php" class="nav item active nav-link">Registreren</a></li>
              <?php } ?>

              <li><a id="welkom" class="nav item active nav-link"> 
                Welkom, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?>
              </a></li>
              <?php } ?>

            </ul>
            <form id="zoekbalk" action="#" method="post" class="form-inline my-2 mylg-0">
              <input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="Zoekopdracht.." aria-label="search">
              <button class="btn btn-success" type="submit">Zoeken</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
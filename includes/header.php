<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> CMS Open dag Aventus</title>
	<!-- Own stylesheet ( via scss) -->
	<link rel="stylesheet" href="css/stylesheet.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

	<nav class="turqoise navbar navbar-expand container-fluid">
		<div class="container">
			<a href="index.php" class="navbar-brand">
				<img class="logo" src="images/logo2.png"/>

				<div class="collapse navbar-collapse" id="navbar">
					<ul class="navbar-nav mr-auto">
						<?php if(isset($_SESSION['user'])){?>
						<a href="cms.php" class="nav-item active nav-link">CMS</a>
						<?php } ?>
						<a href="help.php" class="nav-item active nav-link">Help</a>
						<?php if(isset($_SESSION['user'])){?>
						<a class="nav-item active nav-link" href="logout.php">
							Logout
						</a>
						<a id="logout" class="nav item active nav-link"> 
							Welkom, <?php echo $_SESSION['username'];?>
						</a>
						<?php } ?>
					</ul>

					<form action="#" method="post" class="form-inline my-2 mylg-0">
						<input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="Zoekopdracht.." aria-label="search">
						<button class="btn btn-success" type="submit">Zoeken</button>
					</form>
				</div>
			</div>
		</nav>
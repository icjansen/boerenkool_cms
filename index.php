<?php

include 'includes/config.php';
include 'includes/header.php';
include 'includes/db_login.php';

if(isset($_SESSION["user"])){
	header("location: cms.php");
	exit;
} else {
	?>

	<div class="wrapper fadeInDown"> 
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
				<img src="images/logo2.png" id="icon" alt="User Icon" />
				<h1>Inloggen CMS</h1>
			</div>

			<!-- Login Form -->
			<form action="" method="post">
				<input type="text" id="login" class="fadeIn second" name="login_name" placeholder="username or email">
				<input type="password" id="password" class="fadeIn third" name="login_password" placeholder="password">
				<input type="submit" name="login_btn" class="fadeIn fourth" value="Log In">
			</form>

			<!-- Register
			<div id="formFooter">
				<a href="register.php" class="underlineHover" href="#">Registreren</a>
			</div>-->

		</div>
	</div>

	<?php
}
include 'includes/footer.php';
?>
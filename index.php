<?php
include 'includes/header.php';
?>

<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->

		<!-- Icon -->
		<div class="fadeIn first">
			<img src="images/logo2.png" id="icon" alt="User Icon" />
			<h1>Inloggen</h1>
		</div>

		<!-- Login Form -->
		<form>
			<input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
			<input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
			<input type="submit" class="fadeIn fourth" value="Log In">
		</form>

		<!-- Register -->
		<div id="formFooter">
			<a href="register.php" class="underlineHover" href="#">Registreren</a>
		</div>

	</div>
</div>

<?php
include 'includes/footer.php';
?>
<?php
include 'includes/header.php';
?>

<div class="wrapper fadeInDown">
	<div id="formContent">
		<!-- Tabs Titles -->

		<!-- Icon -->
		<div class="fadeIn first">
			<img src="images/logo2.png" id="icon" alt="User Icon" />
			<h1>Registreren</h1>
		</div>

		<!-- Register Form -->
		<form>
			<input type="text" id="first_name" class="fadeIn second" name="login" placeholder="voornaam">
			<input type="text" id="last_name" class="fadeIn third" name="login" placeholder="achternaam">
			<input type="text" id="username" class="fadeIn fourth" name="login" placeholder="username">
			<input type="text" id="email" class="fadeIn fifth" name="login" placeholder="email">
			<input type="text" id="password" class="fadeIn sixth" name="login" placeholder="password">
			<input type="submit" class="fadeIn seventh" value="Registreren">
		</form>

	</div>
</div>

<?php
include 'includes/footer.php';
?>
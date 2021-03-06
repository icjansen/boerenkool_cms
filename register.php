<?php
include 'includes/config.php';
include 'includes/header.php';
include 'includes/db_register.php';

if(isset($_SESSION['user'])){

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
		<form action="" method="post">
			<input type="text" id="first_name" class="fadeIn second" name="first_name" placeholder="voornaam">
			<input type="text" id="last_name" class="fadeIn third" name="last_name" placeholder="achternaam">
			<input type="text" id="username" class="fadeIn fourth" name="username" placeholder="username">
			<input type="email" id="email" class="fadeIn fifth" name="email" placeholder="email">
			<input type="password" id="password" class="fadeIn sixth" name="password" placeholder="password">
			<input type="password" id="password_check" class="fadeIn seventh" name="password_check" placeholder="repeat password">
			<input type="submit" name="register_btn" class="fadeIn eigth" value="Registreren">
		</form>

    <!-- Register -->
      <div id="formFooter">
        <a href="index.php" class="underlineHover">Login</a>
      </div>

	</div>
</div>

<?php } else {
  //Als je niet bent ingelogd
  include 'includes/footer.php';
?>
  <!-- niet ingelogd, dus H1 + JS redirect naar index-->
  <h1> Je bent niet ingelogd! </h1>
  <p> Je wordt over 3 seconden doorgestuurd naar de inlogpagina... </p>
  <script src="js/redirects.js"></script>

<?php
}
include 'includes/footer.php';
?>
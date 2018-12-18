<?php
include 'includes/header.php';

if(isset($_SESSION['user'])){

?>

<section id="main">
	<div class="container">
		<div class="row">
      <?php include 'includes/sidebar.php'; ?>
			<div class="col-md-9">
				<div class="list-group">
        		  <h1> Dit is het CMS voor de open dag van MBO Aventus </h1>
        		  <img id="cmslogo" class="logo" src="images/aventus5.jpg"/>
        		  <br>
        		  <h5> Dit betreft de opleidingen: Applicatie- en mediaontwikkelaar en gamedeveloper </h5>
				</div>
			</div>
		</div>
	</div>
</section>

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
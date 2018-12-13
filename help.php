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
          <h1> Hier komt heel veel help te staan </h1>
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
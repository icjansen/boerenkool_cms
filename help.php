<?php
include 'includes/header.php';

if(isset($_SESSION['user'])){

?>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="list-group">
          <h2> Wat is dit allemaal? </h2>
          <br>
          <div id="helplijst">
            <ul>
              <li>1. Dit een CMS voor de opendag van de opleidingen Applicatieontwikkeling en Gamedeveloper</li>
              <li>2. Je kan hier projecten toevoegen met informatie en een thumbnail</li>
              <li>3. Je kan bestaande projecten aanpassen en hier ook slideshow foto's toevoegen</li>
            </ul>
          </div>
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
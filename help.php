<?php
include 'includes/header.php';
//var_dump($_SESSION['user']);
?>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div id="sidebar" class="list-group">
          <a href="add_project.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            Project toevoegen
          </a>
          <a href="modify_project.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            Project aanpassen
          </a>
          <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Categorieën
          </a>
          <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            Gebruikers
          </a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="list-group">
          <h1> Hier komt heel veel help te staan </h1>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
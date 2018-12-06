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
		        	<h1> Dit is het CMS voor de open dag van MBO Aventus </h1>
		        	<img class="logo" src="images/aventus5.jpg"/>
		        	<br>
		        	<h5> Dit betreft de opleidingen: Applicatie- en mediaontwikkelaar en gamedeveloper </h5>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include 'includes/footer.php';
?>
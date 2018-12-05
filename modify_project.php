<?php
include 'includes/config.php';
include 'includes/db_getcourse.php';
include 'includes/db_gettype.php';
include 'includes/db_getstudy.php';
include 'includes/header.php';
include 'includes/db_modify_project.php';
?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="add_project.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						Project toevoegen
					</a>
					<a href="modify_project.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
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
       <div class="col-md-9">
        <?php
        while($row=mysqli_fetch_array($result)){

         echo "
         <form method='post' action='' enctype='multipart/form-data'>
         <div class='col-md-12'>

         <div id='divmodify' class='collapsible'><a class='list-group-item' data-toggle='collapse' data-target='#".$row['project_id']."' style='cursor:pointer'>"
         .$row['project_name']."</a></div>

         <div id='".$row['project_id']."' class='collapse'>

         <input type='text' name='project_id'
         class='form-control' value='"
         .$row['project_id']."' readonly/>

         <input type='text' name='project_name'
         class='form-control' value='"
         .$row['project_name']."' />

         <input type='text' name='project_desc'
         class='form-control' value='"
         .$row['project_description']."' />

         <input type='date' name='project_year'
         class='form-control' value='"
         .$row['project_year']."' />

         <input type='text' name='student_name'
         class='form-control' value='"
         .$row['student_name']."' />

         <input type='text' name='download_link'
         class='form-control' value='"
         .$row['download_link']."' />

         <!-- Course -->

         <input type='text' name='course_name' id='course' list='courses' value='"
         .$row['course_name']."'>
         <datalist id='courses'>
         ";
         while($row_course=mysqli_fetch_array($result_course)){
           echo " <option value='" .$row_course['course_name']."'>" .$row_course['course_name']."</option>";
         }

         echo "
         </datalist>

         <!-- Type -->

         <input type='text' name='type' id='type' list='types' value='"
         .$row['type_name']."'>
         <datalist id='types'>
         ";
         while($row_type=mysqli_fetch_array($result_type)){
          echo "<option value='" .$row_type['type_name']."'>" .$row_type['type_name']."</option>";
        }

        echo "
        </datalist>

        <!-- Study -->

        <input type='text' name='study' id='study' list='studies' value='"
        .$row['study_name']."'>
        <datalist id='studies'>
        ";
        while($row_study=mysqli_fetch_array($result_study)){
          echo "<option value='" .$row_study['study_name']."'>" .$row_study['study_name']."</option>";
        }

        echo "
        </datalist>

        <p><img id='project_plaatje' class='project_pic' 
        src='".$row['project_thumbnail']."' /></p>

        <input type='file' name='fileToUpload'
        class='form-control-file' value='"
        .$row['project_thumbnail']."' />

        <input type='submit' name='modify_btn'
        class='btnContact' value='Submit' />

        </div>
        </div>
        </form>
        ";
      }	
      ?>

    </div>

  </div>
</div>
</section>

<?php
include 'includes/footer.php';
?>
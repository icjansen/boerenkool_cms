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
			<?php include 'includes/sidebar.php'; ?>
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

         <p><span class='input_span'>Project ID</span><input type='text' name='project_id'
         class='form-control' value='"
         .$row['project_id']."' readonly/></p>

         <p><span class='input_span'>Project naam</span><input type='text' name='project_name'
         class='form-control' value='"
         .$row['project_name']."' /></p>

         <p><span class='input_span'>Project beschrijving</span><input type='text' name='project_desc'
         class='form-control' value='"
         .$row['project_description']."' /></p>

         <p><span class='input_span'>Project jaar</span><input type='date' name='project_year'
         class='form-control' value='"
         .$row['project_year']."' /></p>

         <p><span class='input_span'>Naam van student</span><input type='text' name='student_name'
         class='form-control' value='"
         .$row['student_name']."' /></p>

         <p><span class='input_span'>Download link</span><input type='text' name='download_link'
         class='form-control' value='"
         .$row['download_link']."' /></p>

         <!-- Course -->

         <p><span class='input_span'>Vak</span><input type='text' name='course_name' id='course' list='courses' value='"
         .$row['course_name']."'></p>
         <datalist id='courses'>
         ";
         while($row_course=mysqli_fetch_array($result_course)){
           echo " <option value='" .$row_course['course_name']."'>" .$row_course['course_name']."</option>";
         }

         echo "
         </datalist>

         <!-- Type -->

         <p><span class='input_span'>Type applicatie</span><input type='text' name='type' id='type' list='types' value='"
         .$row['type']."'></p>
         <datalist id='types'>
         ";
         while($row_type=mysqli_fetch_array($result_type)){
          echo "<option value='" .$row_type['type_name']."'>" .$row_type['type_name']."</option>";
        }

        echo "
        </datalist>

        <!-- Study -->

        <p><span class='input_span'>Studie</span><input type='text' name='study' id='study' list='studies' value='"
        .$row['study']."'></p>
        <datalist id='studies'>
        ";
        while($row_study=mysqli_fetch_array($result_study)){
          echo "<option value='" .$row_study['study_name']."'>" .$row_study['study_name']."</option>";
        }

        echo "
        </datalist>

        <p><span class='input_span'>Project thumbnail</span><img id='project_plaatje' class='project_pic' 
        src='".$row['project_thumbnail']."' /></p>

        <p><span class='input_span'>Project thumbnail uploaden</span><input type='file' name='fileToUpload'
        class='form-control-file'/></p>

        <p><span class='input_span'>Slideshow plaatjes uploaden</span><input type='file' name='slideshow_pic'
        class='form-control-file' value='"
        .$row['project_thumbnail']."' /></p>

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
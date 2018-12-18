<?php
include 'includes/config.php';
include 'includes/db_getcourse.php';
include 'includes/db_gettype.php';
include 'includes/db_getstudy.php';
include 'includes/header.php';
include 'includes/db_add_project.php';

if(isset($_SESSION['user'])){

?>

<section id="main">
	<div class="container">
		<div class="row">
			<?php include 'includes/sidebar.php'; ?> 
			<div class="col-md-9">
				<form method="post" action="" enctype='multipart/form-data'>
					<div class="col-md-9">
						<div class="form-group">
							<input type="text" name="project_name" class="form-control" placeholder="Project name"/>
						</div>
						<div class="form-group">
							<input type="text" name="project_desc" class="form-control" placeholder="Description"/>
						</div>
						<div class="form-group">
							<input type="date" name="project_year" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" name="student_name" class="form-control" placeholder="Student name"/>
						</div>
						<div class="form-group">
							<input type="text" name="download_link" class="form-control" placeholder="Download link"/>
            </div>
            <!-- Course -->
						<div class="form-group">
							<input type="text" name="course_name" id="default" list="courses" placeholder="Course"/>
							<datalist id="courses">
								<?php
								while($row_course=mysqli_fetch_array($result_course)){
									echo '<option value="'
									.$row_course['course_name'].'"></option>';
                }
								
								?>
							</datalist>
						</div>
            <!-- Type -->
            <div class="form-group">
              <input type="text" name="type" id="type" list="types" placeholder="Type"/>
              <datalist id="types">
                <?php
                while($row_type=mysqli_fetch_array($result_type)){
                  echo '<option value="'
                  .$row_type['type_name'].'"></option>';
                }
                
                ?>
              </datalist>
            </div>
            <!-- Study -->
            <div class="form-group">
              <input type="text" name="study" id="study" list="studies" placeholder="Study"/>
              <datalist id="studies">
                <?php
                while($row_study=mysqli_fetch_array($result_study)){
                  echo '<option value="'
                  .$row_study['study_name'].'"></option>';
                }
                
                ?>
              </datalist>
            </div>
            <div class="form-group">
              <input type="file" name="fileToUpload" class="form-control-file"/>
            </div>
            <input type="submit" name="project_btn" class="btnContact" value="Submit" />
          </div>
        </form>
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
  <p> Je wordt over 5 seconden doorgestuurd naar de inlogpagina... </p>
  <script src="js/redirects.js"></script>

<?php
}
include 'includes/footer.php';
?>
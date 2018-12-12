<?php
include 'includes/config.php';
include 'includes/db_getcourse.php';
include 'includes/db_gettype.php';
include 'includes/db_getstudy.php';
include 'includes/header.php';
include 'includes/db_add_project.php';
//var_dump($_SESSION['user']);
?>

<section id="main">
	<div class="container">
		<div class="row">
			<?php include 'includes/sidebar.php'; ?> 
			<div class="col-md-9">
				<form method="post" action="" enctype='multipart/form-data'>
					<div class="col-md-9">
						<div class="form-group">
							<input type="text" name="project_name" class="form-control" placeholder="Project name" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="project_desc" class="form-control" placeholder="Description" value="" />
						</div>
						<div class="form-group">
							<input type="date" name="project_year" class="form-control" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="student_name" class="form-control" placeholder="Student name" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="download_link" class="form-control" placeholder="Download link" value="" />
            </div>
            <!-- Course -->
						<div class="form-group">
							<input type="text" name="course_name" id="default" list="courses" placeholder="Course"/>
							<datalist id="courses">
								<?php
								while($row_course=mysqli_fetch_array($result_course)){
									echo '<option value="'
									.$row_course['course_name'].'">';
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
                  .$row_type['type_name'].'">';
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
                  .$row_study['project_id'].'">'
                  .$row_study['study_name'].'</option>';
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

<?php
include 'includes/footer.php';
?>
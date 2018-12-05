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
			<div class="col-md-3">
				<div class="list-group">
					<a href="add_project.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
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
				<form method="post" action="">
					<div class="col-md-9">
						<div class="form-group">
							<input type="text" name="project_name" class="form-control" placeholder="Project name" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="project_desc" class="form-control" placeholder="Description" value="" />
						</div>
						<div class="form-group">
							<input type="date" name="project_year" class="form-control" placeholder="Project year" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="student_name" class="form-control" placeholder="Student name" value="" />
						</div>
						<div class="form-group">
							<input type="text" name="download_link" class="form-control" placeholder="Download link" value="" />
						</div>
            <!-- Course -->
						<div class="form-group">
							<input type="text" name="course_name" id="default" list="courses" placeholder="Course">
							<datalist id="courses">
								<?php
								while($row_course=mysqli_fetch_array($result_course)){
									echo "<option value="
									.$row_course['course_name'].">";
								}
								
								?>
							</datalist>
						</div>
            <!-- Type -->
            <div class="form-group">
              <input type="text" name="type" id="type" list="types" placeholder="Type">
              <datalist id="types">
                <?php
                while($row_type=mysqli_fetch_array($result_type)){
                  echo "<option value="
                  .$row_type['type_name'].">";
                }
                
                ?>
              </datalist>
            </div>
            <!-- Study -->
            <div class="form-group">
              <input type="text" name="study" id="study" list="studies" placeholder="Study">
              <datalist id="studies">
                <?php
                while($row_study=mysqli_fetch_array($result_study)){
                  echo "<option value="
                  .$row_study['study_name'].">";
                }
                
                ?>
              </datalist>
            </div>
            <div class="form-group">
              <input type="file" name="project_pic" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <input type="submit" name="project_btn" class="btnContact" value="Submit" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>

<?php
include 'includes/footer.php';
?>
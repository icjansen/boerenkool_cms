<?php
include 'config.php';

	$project = new Project();
	$result = $project->get_project();

	if (isset($_POST['modify_btn'])){
  $project_id = $_REQUEST['project_id'];
	$project_name = trim($_REQUEST['project_name']);
	$project_desc = trim($_REQUEST['project_desc']);
	$project_year = trim($_REQUEST['project_year']);
	$student_name = trim($_REQUEST['student_name']);
	$download_link = trim($_REQUEST['download_link']);
	$course_name = trim($_REQUEST['course_name']);
	$project_pic = 'foto';

	$project = new Project();
	//var_dump($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic);
	$result = $project->modify_project($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic);

	if($result===false){
		die("Wijzige niet gelukt");
	} else {
		echo '<h1 style="text-align: center; color: green;">Project wijzigen gelukt!</h1>';
		$_SESSION['project_name'] = $project_name;
		//header("location: ?wijzigen=gelukt");
	}
}

?>
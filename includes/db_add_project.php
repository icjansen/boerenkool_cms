<?php

if (isset($_POST['project_btn'])){
	$project_name = trim($_REQUEST['project_name']);
	$project_desc = trim($_REQUEST['project_desc']);
	$project_year = trim($_REQUEST['project_year']);
	$student_name = trim($_REQUEST['student_name']);
	$download_link = trim($_REQUEST['download_link']);
	$course_name = trim($_REQUEST['course_name']);
	$project_pic = trim($_REQUEST['project_pic']);

	$project = new Project();
	//var_dump($project_name, $project_desc, $project_year, $student_name, $download, $course_name, $project_pic);
	$result = $project->add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic);

	if($result===false){
		die("Niet gelukt");
	} else {
		echo '<h1 style="text-align: center; color: green;">Project toevoegen gelukt!</h1>';
		$_SESSION['project_name'] = $project_name;
		header("location: ?gelukt");
	}
}
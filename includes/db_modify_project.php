<?php

$project = new Project();
$result = $project->get_project();

if (isset($_POST['modify_btn'])){

  include 'project_pic_validate.php';
  include 'slideshow_pic_validate.php';

$project_id = $_REQUEST['project_id'];
$project_name = trim($_REQUEST['project_name']);
$project_desc = trim($_REQUEST['project_desc']);
$project_year = trim($_REQUEST['project_year']);
$student_name = trim($_REQUEST['student_name']);
$download_link = trim($_REQUEST['download_link']);
$course_name = trim($_REQUEST['course_name']);
if ($check == false) {
  while($row=mysqli_fetch_array($result)){
  $project_pic = $row['project_thumbnail'];
  }
} else{
  $project_pic = $target_file;
}
$type = trim($_REQUEST['type']);
$study = trim($_REQUEST['study']);
$slideshow_image = $slideshow_pic;


  //include "db_fileupload.php";

$project = new Project();
	//var_dump($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic);
$result = $project->modify_project($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study, $slideshow_image);

if($result===false){
  die("Wijzigen niet gelukt");
} else {
  $_SESSION['project_name'] = $project_name;
	header("location: ?wijzigen=gelukt");
}
}

?>
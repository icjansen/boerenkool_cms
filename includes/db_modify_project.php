<?php

$project = new Project();
$result = $project->get_project();

if (isset($_POST['modify_btn'])){

  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

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

  //include "db_fileupload.php";

$project = new Project();
	//var_dump($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic);
$result = $project->modify_project($project_id, $project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study);

if($result===false){
  die("Wijzigen niet gelukt");
} else {
  header("Location:modify_project.php?wijzigen_gelukt");
  $_SESSION['project_name'] = $project_name;
		//header("location: ?wijzigen=gelukt");
}
}

?>
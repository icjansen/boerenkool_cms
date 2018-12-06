<?php

if (isset($_POST['project_btn'])){

  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
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

	$project_name = trim($_REQUEST['project_name']);
	$project_desc = trim($_REQUEST['project_desc']);
	$project_year = trim($_REQUEST['project_year']);
	$student_name = trim($_REQUEST['student_name']);
	$download_link = trim($_REQUEST['download_link']);
	$course_name = trim($_REQUEST['course_name']);
  $project_pic = $target_file;
  $type = trim($_REQUEST['type']);
  $study = trim($_REQUEST['study']);
	//$project_pic = trim($_REQUEST['project_pic']);

	$project = new Project();
	//var_dump($project_name, $project_desc, $project_year, $student_name, $download, $course_name, $project_pic);
	$result = $project->add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study);
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

?>
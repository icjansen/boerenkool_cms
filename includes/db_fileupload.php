<?php

// Wanneer er op de submit knop wordt gedrukt
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["project_pic"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check of het plaatje ook een echt plaatjes is
    $check = getimagesize($_FILES["project_pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
  // Check hoe groot de file is
  if ($_FILES["project_pic"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Accepteer alleen JPG, JPEG en PNG
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG & PNG files are allowed.";
    $uploadOk = 0;
  }
  // Check of alles klopt, dan probeer je de file te uploaden
  if($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["project_pic"]["tmp_name"], $target_file)){
      header("Location:modify_project.php");
      //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

?>
<?php
$target_dir = "slideshow/";
  $slideshow_pic = $target_dir . basename($_FILES["slideshow_pic"]["name"]);
  $uploadOk2 = 1;
  $imageFileType = strtolower(pathinfo($slideshow_pic,PATHINFO_EXTENSION));

  $check2 = $_FILES['slideshow_pic']['size'];

  // Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["slideshow_pic"]["tmp_name"], $slideshow_pic)) {
    echo "The file ". basename( $_FILES["slideshow_pic"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
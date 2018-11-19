<?php
	if(isset($_POST['register_btn'])){
		include 'db_connect.php';
		session_start();
		$first_name = $conn->real_escape_string($_POST['first_name']);
		$last_name = $conn->real_escape_string($_POST['last_name']);
		$username = $conn->real_escape_string($_POST['username']);
		$email = $conn->real_escape_string($_POST['email']);
		$password = $conn->real_escape_string($_POST['password']);		
		$password_check = $conn->real_escape_string($_POST['password_check']);

		if($password == $password_check){
			//user created
			$password = md5($password);
			$sql = "INSERT INTO user (first_name, last_name,username,email,password,created) VALUES ('$first_name', '$last_name','$username','$email','$password',NOW())";
			//echo $sql;
			$conn->query( $sql );
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: index.php");
		}else{
			//failed
			$_SESSION['message'] = "The passwords do not match";
		}
	}

?>
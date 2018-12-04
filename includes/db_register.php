<?php

if (isset($_POST['register_btn'])){
	$first_name = trim($_REQUEST['first_name']);
	$last_name = trim($_REQUEST['last_name']);
	$username = trim($_REQUEST['username']);
    $email = trim($_REQUEST['email']);
    $pass1 = trim($_REQUEST['password']);
    $pass2 = trim($_REQUEST['password_check']);

    if (strcmp($pass1, $pass2 ) !== 0 || strlen ($pass1) == 0) {
        die ("Wachtwoorden zijn niet gelijk");
    };
    $user = new User();
    //var_dump($first_name, $last_name, $username, $email, $pass1, $pass2);
    $result = $user->register($first_name, $last_name, $username, $email, $pass1, $pass2);
    //var_dump($result);
    if ($result === false ){
        die ("Account aanmaken is niet gelukt");
    } else {
        echo '<h1 style="text-align: center; color: green;">Account aanmaken gelukt!</h1>';
		$_SESSION['username'] = $username;
		header("location: index.php");
    }
}

?>
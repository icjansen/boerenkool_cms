<?php
if (isset($_POST['login_btn'])){
    $login_name = trim($_REQUEST['login_name']);
    $pass = trim($_REQUEST['login_password']);
    $user = new User();
    $result = $user->login($login_name,$pass);
    if( $user->login($_REQUEST['login_name'], $_REQUEST['login_password'])){
        header( 'Location: cms.php');
        //echo "Succes!";
        exit;
    } else {
        echo '<h1 style="text-align: center; color: red;">Login mislukt!</h1><p style="text-align: center; color: red;">Vul a.u.b. uw gegevens opnieuw in.</p>';
    }
}
?>
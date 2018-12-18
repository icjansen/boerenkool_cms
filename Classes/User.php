<?php
class User {
    public function __construct(){
    }
    public function register($first_name='',$last_name='', $username = '', $email = '', $password = '', $password_check=''){
        // Password hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql = 'INSERT INTO user (first_name, last_name, username,email, password) VALUES (
    "'.$conn->real_escape_string($first_name).'",
    "'.$conn->real_escape_string($last_name).'",
    "'.$conn->real_escape_string($username).'",
    "'.$conn->real_escape_string($email).'",
    "'.$hashed_password.'"
    )';
        //var_dump($sql);
        if ($conn->query ($sql)) {
            $_SESSION['username']=$username;
            return $conn->insert_id;
        }
        return false;
    }

    public function login ($login_name='', $password = '') {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $sql = 'SELECT * FROM user WHERE username = 
            "' . $conn->real_escape_string( trim($login_name)) .'"
        OR email = 
            "' . $conn->real_escape_string( trim($login_name)) .'"';
        $result = $conn->query($sql);
        $user_row = $result->fetch_assoc();

        if($user_row === null)
            return false;

        if( password_verify($password, $user_row['password'])) {
            $_SESSION['user'] = $user_row;
            $_SESSION['username'] = $user_row['username'];
            $_SESSION['first_name'] = $user_row['first_name'];
            $_SESSION['last_name'] = $user_row['last_name'];
            if($user_row['admin'] == 1){
              $_SESSION['admin'] = $user_row['admin'];
            }
            return true;
        }
        return false;
    }
    public function logout(){
        unset( $_SESSION['user']);
        unset($_SESSION['username']);
        return true;
    }
    public function isLoggedIn(){
        return isset ( $_SESSION['user']);
    }

    public function get_users(){

    $db = Database::getInstance();
    $conn = $db->getConnection();

    $sql = 'SELECT * FROM user';

    $result = $conn->query($sql);
    return $result;
  }
}
?>
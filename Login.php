<?php
session_start();
include 'DataBase.php';
include 'Settings.php';
include 'Security.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
if(isset($_SESSION['uid'])){
    header('Location: ViewProfile.php');
    exit;
}
else if(isset($_POST['submit'])){
    $sql = "SELECT * FROM user WHERE email = ?";
    $result = $db -> query($sql, $_POST['email']);
    $user = $result -> fetchArray();
    if( isset($user['password']) && $user['password'] == $_POST['password'] ){
        $uid = $user['id'];
        Authentication :: Login( $uid );
        if($user['role'] == 'adminuser'){
            header('Location: AdminPanel.php');
            exit;
        }
        else if($user['role'] == 'normaluser'){
            header('Location: ViewProfile.php');
            exit;
        }
        else{
            header('Location: 403.php');
            exit;
        }
    }
    else{
        echo 'Username or Password Incorrect';
    }
}
else{
    include 'Login_View.php';
}
?>
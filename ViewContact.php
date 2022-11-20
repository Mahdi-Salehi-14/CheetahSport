<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
    $sql = "SELECT * FROM message WHERE id = ?";
    $result = $db -> query($sql, $_GET['id']);
    $message = $result -> fetchArray();
    include 'ViewContact_View.php';
    $db -> close();
    }
?>
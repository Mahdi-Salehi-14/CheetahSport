<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $uid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser')
    {
        header('Location: 403.php');
        exit;
    }
    else
    {
        $sql = "DELETE FROM user WHERE id = ?";
        $result = $db -> query($sql, $uid);
        header('Location: User_DataTable.php');
        exit;
    }
?>
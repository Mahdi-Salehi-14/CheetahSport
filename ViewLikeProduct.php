<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
    }

    $sql = "SELECT * FROM like_product WHERE userid = ? AND likestatus = 'like'";
    $result = $db -> query($sql, $uid);
    $likelist = $result -> fetchAll();
    
    include 'ViewLikeProduct_View.php';
    $db -> close();
?>
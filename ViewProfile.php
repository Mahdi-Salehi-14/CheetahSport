<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    
    $sql = "SELECT * FROM order_product WHERE userid = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $userorder = $result -> fetchAll();

    $ordercount = 0;

    foreach($userorder as $order_product){
        $ordercount = $ordercount + 1;
    }
    
    $sql = "SELECT * FROM like_product WHERE userid = ? AND likestatus = 'like'";
    $result = $db -> query($sql, $_SESSION['uid']);
    $userlike = $result -> fetchAll();

    $likecount = 0;

    foreach($userlike as $like_product){
        $likecount = $likecount + 1;
    }
    
    $sql = "SELECT * FROM bookmark_product WHERE userid = ? AND bookmarkstatus = 'bookmark-on'";
    $result = $db -> query($sql, $_SESSION['uid']);
    $userbookmark = $result -> fetchAll();

    $bookmarkcount = 0;

    foreach($userbookmark as $bookmark_product){
        $bookmarkcount = $bookmarkcount + 1;
    }
    
    include 'ViewProfile_View.php';
    $db -> close();
?>
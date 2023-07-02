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
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_GET['id']);
        $viewinguser = $result -> fetchArray();

        $sql = "SELECT * FROM order_product WHERE userid = ?";
        $result = $db -> query($sql, $_GET['id']);
        $userorder = $result -> fetchAll();
    
        $ordercount = 0;
    
        foreach($userorder as $order_product){
            $ordercount = $ordercount + 1;
        }
        
        $sql = "SELECT * FROM like_product WHERE userid = ? AND likestatus = 'like'";
        $result = $db -> query($sql, $_GET['id']);
        $userlike = $result -> fetchAll();
    
        $likecount = 0;
    
        foreach($userlike as $like_product){
            $likecount = $likecount + 1;
        }
        
        $sql = "SELECT * FROM bookmark_product WHERE userid = ? AND bookmarkstatus = 'bookmark-on'";
        $result = $db -> query($sql, $_GET['id']);
        $userbookmark = $result -> fetchAll();
    
        $bookmarkcount = 0;
    
        foreach($userbookmark as $bookmark_product){
            $bookmarkcount = $bookmarkcount + 1;
        }

        include 'ViewProfile_Admin_View.php';
        $db -> close();
    }
?>
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

    $sql = "SELECT * FROM bookmark_product WHERE userid = ? AND bookmarkstatus = 'bookmark-on'";
    $result = $db -> query($sql, $uid);
    $bookmarklist = $result -> fetchAll();
    
    include 'ViewBookmarkProduct_View.php';
    $db -> close();
?>
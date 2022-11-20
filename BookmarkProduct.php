<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $bookmarkstatus = ['bookmark-on', 'bookmark-off'];

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM bookmark_product
            WHERE userid = ? AND productid = ?";
    $result = $db -> query($sql, $uid, $pid);
    $bookmark = $result -> fetchArray();

    if(isset($bookmark['id'])){
        if($bookmark['bookmarkstatus'] == $bookmarkstatus[0]){
            $sql = "UPDATE bookmark_product SET
                    bookmarkstatus = ?
                    WHERE userid = ? AND productid = ?";
            $result = $db -> query($sql, $bookmarkstatus[1], $uid, $pid);
            echo 'bookmark-off';
        }
        else if($bookmark['bookmarkstatus'] == $bookmarkstatus[1]){
            $sql = "UPDATE bookmark_product SET
                    bookmarkstatus = ?
                    WHERE userid = ? AND productid = ?";
            $result = $db -> query($sql, $bookmarkstatus[0], $uid, $pid);
            echo 'bookmark-on';
        }
    }
    else{
        $sql = "INSERT INTO bookmark_product (userid, productid, bookmarkstatus)
                VALUES (?, ?, ?)";
        $result = $db -> query($sql, $uid, $pid, $bookmarkstatus[0]);
        echo 'bookmark-on';
    }
    $db -> close();
?>
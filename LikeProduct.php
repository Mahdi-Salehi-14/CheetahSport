<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    
    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $likestatus = ['like', 'dislike'];

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM like_product
            WHERE userid = ? AND productid = ?";
    $result = $db -> query($sql, $uid, $pid);
    $like = $result -> fetchArray();

    if(isset($like['id'])){
        if($like['likestatus'] == $likestatus[0]){
            $sql = "UPDATE like_product SET
                    likestatus = ?
                    WHERE userid = ? AND productid = ?";
            $result = $db -> query($sql, $likestatus[1], $uid, $pid);
            echo 'dislike';
        }
        else if($like['likestatus'] == $likestatus[1]){
            $sql = "UPDATE like_product SET
                    likestatus = ?
                    WHERE userid = ? AND productid = ?";
            $result = $db -> query($sql, $likestatus[0], $uid, $pid);
            echo 'like';
        }
    }
    else{
        $sql = "INSERT INTO like_product (userid, productid, likestatus)
                VALUES (?, ?, ?)";
        $result = $db -> query($sql, $uid, $pid, $likestatus[0]);
        echo 'like';
    }
    $db -> close();
?>
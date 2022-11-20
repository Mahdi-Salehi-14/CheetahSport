<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
    }
    
    $sql = "SELECT * FROM product ORDER BY productprice ASC LIMIT 4";
    $result = $db -> query($sql);
    $productlistcheapest = $result -> fetchAll();

    $sql = "SELECT * FROM product ORDER BY productprice DESC LIMIT 4";
    $result = $db -> query($sql);
    $productlistpopular = $result -> fetchAll();

    $sql = "INSERT INTO site_visit () VALUES ()";
    $result = $db -> query($sql);

    include 'index_View.php';
    $db -> close();
?>
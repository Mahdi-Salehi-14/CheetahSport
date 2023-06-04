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

    $sql = "SELECT * FROM site_visit";
    $result = $db -> query($sql);
    $site_visit = $result -> fetchArray();
    $count_site_visit = $site_visit['visit_count'];
    $count_site_visit_New = $count_site_visit + 1;

    $sql = "UPDATE site_visit SET visit_count = ?";
    $result = $db -> query($sql, $count_site_visit_New);

    include 'index_View.php';
    $db -> close();
?>
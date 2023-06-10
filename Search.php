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

    $search = $_POST['search'];

    $sql = "SELECT * FROM product WHERE brand LIKE '%$search%' OR productdescription LIKE '%$search%' OR productname LIKE '%$search%' LIMIT 8";
    $result = $db -> query($sql);
    $productlistsearch = $result -> fetchAll();
    
    include 'Search_View.php';
    $db -> close();
?>
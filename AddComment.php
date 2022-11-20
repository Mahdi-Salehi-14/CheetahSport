<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "INSERT INTO comment (username, productid, commenttext, confirmation)
            VALUES (?, ?, ?, ?)";
    $result = $db -> query($sql, $_POST['username'], $_POST['productid'], $_POST['commenttext'], $_POST['confirmation']);
    $db -> close();
    header("Location: ViewProduct.php?id={$_POST['productid']}");
    exit;
?>
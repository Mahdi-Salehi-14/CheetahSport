<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    
    $bid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "DELETE FROM product_basket WHERE id = ?";
    $result = $db -> query($sql, $bid);
    
    $db -> close();

    header('Location: ViewBasket.php');
    exit;
?>
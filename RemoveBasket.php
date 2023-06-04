<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    
    $bid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "SELECT * FROM product_basket WHERE id = ?";
    $result = $db -> query($sql, $bid);
    $basket = $result -> fetchArray();
    $pid = $basket['productid'];
    $basketquantity = $basket['productnumber'];

    $sql = "SELECT * FROM product WHERE id = ?";
    $result = $db -> query($sql, $pid);
    $product = $result -> fetchArray();
    $productquantity = $product['productquantity'];

    $newquantity = $basketquantity + $productquantity;

    $sql = "UPDATE product SET productquantity = ? WHERE id = ?";
    $result = $db -> query($sql, $newquantity, $pid);
    
    $sql = "DELETE FROM product_basket WHERE id = ?";
    $result = $db -> query($sql, $bid);
    
    $db -> close();

    header('Location: ViewBasket.php');
    exit;
?>
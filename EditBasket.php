<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();

    $productnumbernew = $_POST['productnumber'];
    $basketid = $_POST['basketid'];
    $pid = $_POST['productid'];

    $sql = "SELECT * FROM product_basket WHERE id = ?";
    $result = $db -> query($sql, $basketid);
    $basket = $result -> fetchArray();
    $productnumberlast = $basket['productnumber'];

    $sql = "SELECT * FROM product WHERE id = ?";
    $result = $db -> query($sql, $pid);
    $product = $result -> fetchArray();
    $productquantity = $product['productquantity'];

    $productquantitylast = $productquantity + $productnumberlast;
    $productnumber = $productnumbernew - $productnumberlast;
    $productquantitynew = $productquantity - $productnumber;

    if($productquantitylast >= $productnumbernew)
    {
        $sql = "UPDATE product SET
        productquantity = ?
        WHERE id = ?";
        $result = $db -> query($sql, $productquantitynew, $pid);

        $sql = "UPDATE product_basket SET
        productnumber = ?
        WHERE id = ?";
        $result = $db -> query($sql, $productnumbernew, $basketid);

        $db -> close();

        header('Location: ViewBasket.php');
        exit;
    }
    else
    {
        header('Location: ViewBasket_Overflow.php');
        exit;
    }     
?>
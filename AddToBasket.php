<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $pid = $_GET['id'];
    $uid = Authentication :: uid();
    $pnumber = $_POST['productnumber'];
    $basketstatus = $_POST['basketstatus'];

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "INSERT INTO product_basket (userid, productid, productnumber, basketstatus)
            VALUES (?, ?, ?, ?)";
    $result = $db -> query($sql, $uid, $pid, $pnumber, $basketstatus);
    
    $db -> close();

    header('Location: ViewBasket.php');
    exit;
?>
<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();

    $sql = "UPDATE product_basket SET
    productnumber = ?
    WHERE id = ?";
    $result = $db -> query($sql, $_POST['productnumber'], $_POST['basketid']);

    $db -> close();

    header('Location: ViewBasket.php');
    exit;
?>
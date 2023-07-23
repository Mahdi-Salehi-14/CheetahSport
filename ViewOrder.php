<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $oid = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
        $sql = "SELECT * FROM order_product WHERE id = ?";
        $result = $db -> query($sql, $oid);
        $order = $result -> fetchArray();

        $sql = "SELECT * FROM order_item WHERE orderid = ?";
        $result = $db -> query($sql, $oid);
        $orderitem = $result -> fetchAll();

        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $order['userid']);
        $orderuser = $result -> fetchArray();

        include 'ViewOrder_View.php';
        $db -> close();
    }
?>
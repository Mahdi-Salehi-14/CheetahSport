<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
        $sql = "SELECT * FROM order_product ORDER BY id DESC";
        $result = $db -> query($sql);
        $orderdatatable = $result -> fetchAll();
        include 'Order_DataTable_View.php';
        $db -> close();
    }
?>
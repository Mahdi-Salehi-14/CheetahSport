<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();
    $oid = $_GET['id'];

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
        }
    
    $sql = "SELECT * FROM order_item WHERE orderid = ?";
    $result = $db -> query($sql, $oid);
    $orderitem = $result -> fetchAll();

    include 'PurchaseDetail_View.php';
    $db -> close();
?>
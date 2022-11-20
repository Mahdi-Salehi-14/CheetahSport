<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();
    $oid = $_POST['orderid'];

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
        }
    
    $sql = "SELECT * FROM product_basket WHERE userid = ? AND basketstatus = 'notcompleted'";
    $result = $db -> query($sql, $uid);
    $basket = $result -> fetchAll();

    foreach($basket as $product_basket){
        
        $pid = $product_basket['productid'];
        $pnumber = $product_basket['productnumber'];
        
        $sql = "INSERT INTO order_item (orderid, productid, productnumber)
                VALUES (?, ?, ?)";
        $result = $db -> query($sql, $oid, $pid, $pnumber);
    }

    $completed = 'completed';
    $sql = "UPDATE product_basket SET
                    basketstatus = ?
                    WHERE userid = ?";
    $result = $db -> query($sql, $completed, $uid);
    $db -> close();
    header('Location: FinishPurchase.php');
    exit;
?>
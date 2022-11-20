<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
        }
    
    $sql = "INSERT INTO order_product (userid, address, postalcode, transport, payment)
            VALUES (?, ?, ?, ?, ?)";
    $result = $db -> query($sql, $uid, $_POST['address'], $_POST['postalcode'], $_POST['transport'], $_POST['payment']);

    $sql = "SELECT LAST_INSERT_ID() FROM order_product WHERE userid = ?";
    $result = $db -> query($sql, $uid);
    $oid = $result -> fetchArray();
    $orderid = $oid['LAST_INSERT_ID()'];

    $sql = "SELECT * FROM order_product WHERE id = ?";
    $result = $db -> query($sql, $orderid);
    $order = $result -> fetchArray();

    $sql = "SELECT * FROM product_basket WHERE userid = ? AND basketstatus = 'notcompleted'";
    $result = $db -> query($sql, $uid);
    $basket = $result -> fetchAll();
    
    include 'Factor_View.php';
    $db -> close();
?>
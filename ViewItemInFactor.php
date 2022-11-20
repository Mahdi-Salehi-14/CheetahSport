<?php
    $sql = "SELECT * FROM product_basket WHERE userid = ?";
    $result = $db -> query($sql, $uid);
    $basket = $result -> fetchAll();

    $oid = $order_product['id'];
    $pid = $basket[2];
    $pnumber = $basket[3];

    $sql = "INSERT INTO order_item (orderid, productid, productnumber)
            VALUES (?, ?, ?)";
    $result = $db -> query($sql, $oid, $pid, $pnumber);
?>
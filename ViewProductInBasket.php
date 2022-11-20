<?php
    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM product WHERE id = ?";
        $result = $db -> query($sql, $product_basket['productid']);
        $product = $result -> fetchArray();
    }
    if(isset($product['id'])){
        $id = $product['id'];
        $img = $product['productimg'];
        $name = $product['productname'];

        $productprice = $product['productprice'];
        $productnumber = $product_basket['productnumber'];
        $sum = $productprice * $productnumber;
        
        $price = $sum;
    }
?>
<?php
    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM product WHERE id = ?";
        $result = $db -> query($sql, $bookmark_product['productid']);
        $product = $result -> fetchArray();
    }
    if(isset($product['id'])){
        $id = $product['id'];
        $img = $product['productimg'];
        $name = $product['productname'];
        $productprice = $product['productprice'];
    }
?>
<?php
    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM like_product WHERE userid = ? AND productid = ?";
        $result = $db -> query($sql, $_SESSION['uid'], $product['id']);
        $productlike = $result -> fetchArray();
    }
    if(isset($productlike['id'])){
        if($productlike['likestatus'] == 'like'){
            $lfa = 'fas';
        } 
        else{
            $lfa = 'far';
        }
    }
    else{
        $lfa = 'far';
    }
?>
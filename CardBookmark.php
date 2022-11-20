<?php
    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM bookmark_product WHERE userid = ? AND productid = ?";
        $result = $db -> query($sql, $_SESSION['uid'], $product['id']);
        $productbookmark = $result -> fetchArray();
    }
    if(isset($productbookmark['id'])){
        if($productbookmark['bookmarkstatus'] == 'bookmark-on'){
            $bfa = 'fas';
        } 
        else{
            $bfa = 'far';
        }
    }
    else{
        $bfa = 'far';
    }
?>
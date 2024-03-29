<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();
    }

    $sql = "SELECT * FROM product WHERE id = ?";
    $result = $db -> query($sql, $_GET['id']);
    $product = $result -> fetchArray();

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM like_product WHERE userid = ? AND productid = ?";
        $result = $db -> query($sql, $_SESSION['uid'], $_GET['id']);
        $productlike = $result -> fetchArray();

        $sql = "SELECT * FROM bookmark_product WHERE userid = ? AND productid = ?";
        $result = $db -> query($sql, $_SESSION['uid'], $_GET['id']);
        $bookmarklike = $result -> fetchArray();
    }

    $sql = "SELECT * FROM product WHERE id != ? AND category = ? OR brand = ? LIMIT 4";
    $result = $db -> query($sql, $_GET['id'], $product['category'], $product['brand']);
    $suggestion = $result -> fetchAll();

    $sql = "SELECT * FROM comment WHERE productid = ? AND confirmation = 'confirmed'";
    $result = $db -> query($sql, $_GET['id']);
    $productcomment = $result -> fetchAll();

    if($product['productquantity'] > 0)
    {
        include 'ViewProduct_View.php';
    }
    else
    {
        include 'ViewProduct_View_NoQuantity.php';
    }
    $db -> close();
?>
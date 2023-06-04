<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $pid = $_GET['id'];
    $db = new db($dbhost, $dbuser, $dbpass, $dbname);
    $sql = "SELECT * FROM user WHERE id = ?";
    $result = $db -> query($sql, $_SESSION['uid']);
    $user = $result -> fetchArray();
    if($user['role'] != 'adminuser'){
        header('Location: 403.php');
        exit;
    }
    else{
        if(isset($_POST['submit']))
        {
            $sql = "UPDATE product SET
                    producttitle = ?,
                    productname = ?,
                    productdescription = ?,
                    productquantity = ?,
                    category = ?,
                    brand = ?,
                    productprice = ?,
                    productimg = ?
                    WHERE id = {$pid}";
            $Images_Dir = "Images" . "/" . $_POST['productimg'];
            $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productquantity'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $Images_Dir);
            header('Location: Product_DataTable.php');
            exit;
        }
    else
        {
            $sql = "SELECT * FROM product WHERE id = ?";
            $result = $db -> query($sql, $pid);
            $product = $result -> fetchArray();
            $producttitle = $product['producttitle'];
            $productname = $product['productname'];
            $productdescription = $product['productdescription'];
            $productquantity = $product['productquantity'];
            $category = $product['category'];
            $brand = $product['brand'];
            $productprice = $product['productprice'];
            $productimg = $product['productimg'];
            include 'EditProduct_View.php';
        }
    $db -> close();
    }
?>
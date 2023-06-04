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
        if($user['role'] != 'adminuser'){
            header('Location: 403.php');
            exit;
            }
    }
    include 'AddProduct_View.php';
    if(isset($_POST['submit'])){
            $sql = "INSERT INTO product (producttitle, productname, productdescription, productquantity, category, brand, productprice, productimg)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $Images_Dir = "Images" . "/" . $_POST['productimg'];
            $result = $db -> query($sql, $_POST['producttitle'], $_POST['productname'], $_POST['productdescription'], $_POST['productquantity'], $_POST['category'], $_POST['brand'], $_POST['productprice'], $Images_Dir);
            $db -> close();
            header('Location: Product_DataTable.php');
            exit;
        }
    
?>
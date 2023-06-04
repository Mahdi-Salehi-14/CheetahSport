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
    if($user['role'] != 'adminuser')
    {
        header('Location: 403.php');
        exit;
    }
    else
    {
        $sql = "UPDATE product SET productquantity = ? WHERE id = ?";
        $productquantity = 0;
        $result = $db -> query($sql, $productquantity, $pid);
        header('Location: Product_DataTable.php');
        exit;
    }
?>
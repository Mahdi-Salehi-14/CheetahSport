<?php
session_start();
include 'DataBase.php';
include 'Settings.php';
include 'Security.php';
$db = new db($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM user WHERE id = ?";
$result = $db -> query($sql, $_SESSION['uid']);
$user = $result -> fetchArray();
if($user['role'] != 'adminuser'){
    header('Location: 403.php');
    exit;
}
else{

    $sql = "SELECT * FROM order_product";
    $result = $db -> query($sql);
    $order = $result -> fetchAll();

    $ordercount = 0;

    foreach($order as $order_product){
        $ordercount = $ordercount + 1;
    }

    $sql = "SELECT * FROM site_visit";
    $result = $db -> query($sql);
    $visit = $result -> fetchArray();

    $visitcount = $visit['visit_count'];

    include 'AdminPanel_View.php';
}
?>
<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    $uid = Authentication :: uid();

    

    if(isset($_SESSION['uid'])){
        $sql = "SELECT * FROM user WHERE id = ?";
        $result = $db -> query($sql, $_SESSION['uid']);
        $user = $result -> fetchArray();

        $sql = "SELECT * FROM order_product WHERE userid = ? ORDER BY id DESC";
        $result = $db -> query($sql, $uid);
        $order = $result -> fetchAll();

        
        $count = 0;
        foreach($order as $order_product){
            $count = $count + 1;
        }

        include 'PurchaseInformation_View.php';
        $db -> close();
        }
    else{
        header('Location: Login.php');
        exit;
    }
    
?>
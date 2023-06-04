<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    $db = new db($dbhost, $dbuser, $dbpass, $dbname);

    if(isset($_SESSION['uid'])){
        $pid = $_GET['id'];
        $uid = Authentication :: uid();
        $pnumber = $_POST['productnumber'];
        $pquantity = $_POST['productquantity'];
        $basketstatus = $_POST['basketstatus'];
        
        if($pquantity >= $pnumber)
        {
            $sql = "INSERT INTO product_basket (userid, productid, productnumber, basketstatus)
                    VALUES (?, ?, ?, ?)";
            $result = $db -> query($sql, $uid, $pid, $pnumber, $basketstatus);

            $pquantitynew = $pquantity - $pnumber;

            $sql = "UPDATE product SET productquantity = ? WHERE id = ?";
            $result = $db -> query($sql, $pquantitynew, $pid);

            $db -> close();

            header('Location: ViewBasket.php');
            exit;
        }
        else
        {
            header("Location: ViewProduct_Overflow?id={$pid}");
            exit;
        }
    }
    else{
        header('Location: Login.php');
        exit;
    }
    
?>
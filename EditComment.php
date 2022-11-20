<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    $cid = $_GET['id'];
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
            $sql = "UPDATE comment SET
                    username = ?,
                    productid = ?,
                    commenttext = ?,
                    confirmation = ?
                    WHERE id = {$cid}";
            $result = $db -> query($sql, $_POST['username'], $_POST['productid'], $_POST['commenttext'], $_POST['confirmation']);
            header('Location: Comment_DataTable.php');
            exit;
        }
        else
        {
            $sql = "SELECT * FROM comment WHERE id = ?";
            $result = $db -> query($sql, $cid);
            $comment = $result -> fetchArray();
            $username = $comment['username'];
            $productid = $comment['productid'];
            $commenttext = $comment['commenttext'];
            $confirmation = $comment['confirmation'];
            include 'EditComment_View.php';
        }
    $db -> close();
    }
?>
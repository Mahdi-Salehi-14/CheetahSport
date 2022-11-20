<?php
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';
    session_start();
    $uid = $_GET['id'];
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
            $sql = "UPDATE user
                    SET firstname = ?,
                    lastname = ?,
                    gender = ?,
                    kodmeli = ?,
                    email = ?,
                    number = ?,
                    password = ?,
                    role = ?
                    WHERE id = {$uid}";
                    $result = $db -> query($sql, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['kodmeli'], $_POST['email'], $_POST['number'], $_POST['password'], $_POST['role']);
                    header('Location: User_DataTable.php');
                    exit;
        }
    else
        {
            $sql = "SELECT * FROM user WHERE id = ?";
            $result = $db -> query($sql, $uid);
            $user = $result -> fetchArray();
            $firstname = $user['firstname'];
            $lastname = $user['lastname'];
            $gender = $user['gender'];
            $kodmeli = $user['kodmeli'];
            $email = $user['email'];
            $number = $user['number'];
            $password = $user['password'];
            $role = $user['role'];
            include 'EditProfile_Admin_View.php';
        }
    
    $db -> close();
    }
?>
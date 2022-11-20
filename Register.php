<?php
    session_start();
    include 'DataBase.php';
    include 'Settings.php';
    include 'Security.php';

    if(isset($_POST['submit'])){
        $db = new db($dbhost, $dbuser, $dbpass, $dbname);
        $sql = "INSERT INTO user (firstname, lastname, gender, kodmeli, email, number, password, role)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $db -> query($sql, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['kodmeli'], $_POST['email'], $_POST['number'], $_POST['password'], $_POST['role']);
        $db -> close();
        header('Location: Login.php');
        exit;
    }
    else{
        include 'Register_View.php';
    }
?>
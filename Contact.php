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

    include 'Contact_View.php';

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO message (title, email, number, textarea)
                VALUES (?, ?, ?, ?)";
        $result = $db -> query($sql, $_POST['title'], $_POST['email'], $_POST['number'], $_POST['textarea']);
        $db -> close();
    }
?>
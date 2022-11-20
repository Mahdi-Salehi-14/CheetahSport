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
        }

    include 'Purchase_View.php';
    $db -> close();
?>
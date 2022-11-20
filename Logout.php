<?php
session_start();
include 'DataBase.php';
include 'Settings.php';
include 'Security.php';
Authentication :: Logout();
header('Location: index.php');
exit;
?>
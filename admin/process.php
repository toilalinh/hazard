<?php
session_start();
include_once '../config/config.php';

$txt_username = $_POST['username'];
$txt_password = $_POST['password'];

if($txt_username==$username && $txt_password==$password){
    $_SESSION['username'] = $username;
    $_SESSION['sError'] = '';
    header('Location: '.$base_url.'admin/');
    die();
}else{
    $_SESSION['sError'] = "wrong username/ password";
    header('Location: '.$base_url.'admin/login.php');
    die();
}
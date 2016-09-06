<?php
session_start();

if(isset($_POST['input_username'])){
    $_SESSION['input_username'] = $_POST['input_username'];
}

if(isset($_POST['chon_xe'])){
    $_SESSION['chon_xe'] = $_POST['chon_xe'];
}

if(isset($_POST['chon_game'])){
    $_SESSION['chon_game'] = $_POST['chon_game'];
}

<?php
session_start();
include_once '../config/config.php';

$_SESSION['username'] = '';
$_SESSION['sError'] = '';
header('Location: '.$base_url.'admin/login.php');
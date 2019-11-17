<?php
    session_start();
	include_once '../config/dashboard.php';
	$user = new Dashboard();
    $user->user_logout();
    header("location:login.php");
?>


<?php
    session_start();
    $uid=$_SESSION['uid'];
   //$journal_id=$_SESSION['journal_id'];
	include_once '../config/dashboard.php';
	$user = new Dashboard();
    $user->get_admindetails($uid);
    if (!$user->get_session()){
      header("location:login.php");
     }
include_once '../config/redirect.php';
$redirect = new Redirect();
?>
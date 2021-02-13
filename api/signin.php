<?php
require_once 'connection.php';

$username = $_REQUEST['txtusername'];
$password = $_REQUEST['txtpassword'];
$type = 'ADMIN';

$STH = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername=:username and cPassword=:password");
$STH->bindparam(":username",$username);
$STH->bindparam(":password",$password);
$STH->execute();
$ROW = $STH->fetch(PDO::FETCH_ASSOC);
$CTR = $STH->rowCount();
if($CTR<>0){
	if ($type == $ROW['cType']) {
		session_start();
		$_SESSION['user']=$username;
		echo "<script>alert('Sign in succesfull')</script>";
		echo "<script>window.open('../templates/dashboard.php','_self')</script>";
	}else{
		session_start();
		$_SESSION['user']=$username;
		echo "<script>alert('Sign in succesfull')</script>";
		echo "<script>window.open('../templates/dashboard.php','_self')</script>";
	}
}else {
	echo "<script>alert('Login Failed')</script>";
	echo "<script>window.open('../index.php?loginFailed=true&reason=password','_self')</script>";
}
?>
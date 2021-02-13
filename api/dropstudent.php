<?php
require_once 'connection.php';

$id = $_REQUEST['id'];
$status = "Inactive";

$STH = $DBH->prepare("UPDATE tbl_student_subject SET cStatus = :status Where cId = :id");
	$STH->bindparam(":id",$id);
	$STH->bindparam(":status",$status);
	$STH->execute();

header("../templates/studentlist.php");
?>
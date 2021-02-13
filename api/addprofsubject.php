<?php
require_once 'connection.php';
session_start();

$txtprof = $_SESSION['user'];
$id = $_REQUEST['id'];



$STH = $DBH->prepare("SELECT * FROM tbl_subject Where cId = :id");
	$STH->bindparam(":id",$id);
	$STH->execute();

	$row = $STH->fetch(PDO::FETCH_ASSOC);
	$txtsubjectcode = $row['cSubjectCode'];
	$txtsubjectdesc = $row['cSubjectDescription'];
	$txttime = $row['cTime'];
	$txtprof = $_SESSION['user'];
	$txtroom = $row['cRoom'];
	$txtsy = $row['cSchoolYear'];
	$txtday = $row['cDay'];

$STH = $DBH->PREPARE("INSERT INTO tbl_prof_subject (cSubjectCode,cSubjectDescription, cTime, cProfessor, cDay, cSchoolYear, cRoom)
			VALUES (:txtsubjectcode, :txtsubjectdesc, :txttime, :txtprof, :txtday, :txtsy, :txtroom)");
			$STH->BINDPARAM(":txtsubjectcode",$txtsubjectcode);
			$STH->BINDPARAM(":txtsubjectdesc",$txtsubjectdesc);
			$STH->BINDPARAM(":txttime",$txttime);
			$STH->BINDPARAM(":txtprof",$txtprof);
			$STH->BINDPARAM(":txtday",$txtday);
			$STH->BINDPARAM(":txtsy",$txtsy);
			$STH->BINDPARAM(":txtroom",$txtroom);
			$STH->EXECUTE();

echo "<script>alert('Subject Added')</script>";
echo "<script>window.open('../templates/addsubject.php','_self')</script>";
?>
<?php
require_once 'connection.php';

$txtsubjectcode = $_REQUEST['txtsubjectcode'];
$txtsubjectdesc = $_REQUEST['txtsubjectdesc'];
$txttime = $_REQUEST['txttime'];
$txtroom = $_REQUEST['txtroom'];
$txtsy = $_REQUEST['txtsy'];
$txtday = $_REQUEST['txtday'];


$STH = $DBH->PREPARE("INSERT INTO tbl_subject (cSubjectCode,cSubjectDescription, cTime, cRoom, cSchoolYear, cDay)
			VALUES (:txtsubjectcode, :txtsubjectdesc, :txttime, :txtroom, :txtsy, :txtday)");
			$STH->BINDPARAM(":txtsubjectcode",$txtsubjectcode);
			$STH->BINDPARAM(":txtsubjectdesc",$txtsubjectdesc);
			$STH->BINDPARAM(":txttime",$txttime);
			$STH->BINDPARAM(":txtroom",$txtroom);
			$STH->BINDPARAM(":txtsy",$txtsy);
			$STH->BINDPARAM(":txtday",$txtday);
			$STH->EXECUTE();

echo "<script>alert('Subject Added')</script>";
echo "<script>window.open('../templates/addsubject.php','_self')</script>";	
?>
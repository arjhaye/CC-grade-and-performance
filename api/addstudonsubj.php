<?php
require_once 'connection.php';
session_start();

$id = $_REQUEST['id'];
$sid = $_REQUEST['sid'];
$pname = $_SESSION['user'];
$txtstatus = 'Active';


 	$STH = $DBH->prepare("SELECT * FROM tbl_prof_subject WHERE cSubjectCode = :sid AND cProfessor = :pname");
 	$STH->bindparam(":sid",$sid);
	$STH->bindparam(":pname",$pname);
 	$STH->execute();
 	$row = $STH->fetch(PDO::FETCH_ASSOC);

 	$txtsubjectcode = $row['cSubjectCode'];
 	$txtsubjectdesc = $row['cSubjectDescription'];
 	$txttime = $row['cTime'];
 	$pname = $row['cProfessor'];
 	$txtday = $row['cDay'];
 	$txtsy = $row['cSchoolYear'];
 	$txtroom = $row['cRoom'];

$STH = $DBH->PREPARE("INSERT INTO tbl_student_subject (cAccIdNumber,cSubjectCode,cSubjectDescription, cTime, cProf,cRoom,cSchoolYear,cDay,cStatus)
			VALUES (:id, :txtsubjectcode, :txtsubjectdesc, :txttime, :pname, :txtday, :txtsy, :txtroom, :txtstatus)");
			$STH->BINDPARAM(":id",$id);
			$STH->BINDPARAM(":txtsubjectcode",$txtsubjectcode);
			$STH->BINDPARAM(":txtsubjectdesc",$txtsubjectdesc);
			$STH->BINDPARAM(":txttime",$txttime);
			$STH->BINDPARAM(":pname",$pname);
			$STH->BINDPARAM(":txtroom",$txtroom);
			$STH->BINDPARAM(":txtsy",$txtsy);
			$STH->BINDPARAM(":txtday",$txtday);
			$STH->BINDPARAM(":txtstatus",$txtstatus);
			$STH->EXECUTE();

echo "<script>alert('Subject Added')</script>";
echo "<script>window.open('../templates/addstudentonsubject.php?sid=".$sid."','_self')</script>";

?>
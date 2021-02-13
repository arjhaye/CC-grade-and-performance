<?php
require_once 'connection.php';
session_start();

$txtemailadd = $_REQUEST['txtemailadd'];
$txtcourses = $_REQUEST['txtcourses'];
$txtyearlevel = $_REQUEST['txtyearlevel'];
$txtaddress = $_REQUEST['txtaddress'];
$txtaboutme = $_REQUEST['txtaboutme'];

$STH = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
$STH->execute();
$row = $STH->fetch(PDO::FETCH_ASSOC);
$txtid = $row['cPassword'];


$STH = $DBH->prepare("UPDATE tbl_account SET cEmail = :txtemailadd, cCourse = :txtcourses, cYearLevel = :txtyearlevel, cAddress = :txtaddress, cAbout = :txtaboutme WHERE cAccIdNumber = :txtid");
$STH->bindparam(":txtemailadd",$txtemailadd);
$STH->bindparam(":txtcourses",$txtcourses);
$STH->bindparam(":txtyearlevel",$txtyearlevel);
$STH->bindparam(":txtaddress",$txtaddress);
$STH->bindparam(":txtaboutme",$txtaboutme);
$STH->bindparam(":txtid",$txtid);
$STH->execute();

header("Location: ../templates/studentprofile.php");


?>
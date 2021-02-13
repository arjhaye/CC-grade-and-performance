<?php
require_once 'connection.php';

$txtstudentid = $_REQUEST['txtstudentid'];
$txttype = 'user';
$txtfirstname = $_REQUEST['txtfirstname'];
$txtlastname = $_REQUEST['txtlastname'];
$txtdepartment = $_REQUEST['txtdepartment'];
$txtcourse = $_REQUEST['txtcourse'];
$txtyearlevel = $_REQUEST['txtyearlevel'];

$STH = $DBH->PREPARE("INSERT INTO tbl_account(cAccIdNumber,cFirstName,cLastName,cType,cDepartment,cCourse,cYearLevel)
					VALUES(:txtstudentid,:txtfirstname,:txtlastname,:txttype,:txtdepartment,:txtcourse,:txtyearlevel)");
$STH->BINDPARAM(":txtstudentid",$txtstudentid);
$STH->BINDPARAM(":txtfirstname",$txtfirstname);
$STH->BINDPARAM(":txtlastname",$txtlastname);
$STH->BINDPARAM(":txttype",$txttype);
$STH->BINDPARAM(":txtdepartment",$txtdepartment);
$STH->BINDPARAM(":txtcourse",$txtcourse);
$STH->BINDPARAM(":txtyearlevel",$txtyearlevel);
$STH->EXECUTE();

$txtfullname = $txtlastname .'_'. $txtfirstname;

$STH = $DBH->PREPARE("INSERT INTO tbl_login(cUsername,cPassword,cType)
					VALUES(:txtfullname,:txtstudentid,:txttype)");
$STH->BINDPARAM(":txtfullname",$txtfullname);
$STH->BINDPARAM(":txtstudentid",$txtstudentid);
$STH->BINDPARAM(":txttype",$txttype);
$STH->EXECUTE();

echo "<script>alert('Sign up succesfull')</script>";
echo "<script>window.open('../index.php','_self')</script>";	


?>
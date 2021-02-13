<?php

header('Content-Type: application/json');

require_once 'connection.php';

	$sql = $DBH->prepare("SELECT  cGrade, cSemester FROM tbl_grade where cSemester = 'Prelim'");
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	$sql->execute();

	$data = array();
	foreach ($sql as $key) {
		$data[] = $key;
	}

	print json_encode($data);

	

?>
<?php

header('Content-Type: application/json');

require_once 'connection.php';


$sql1 = $DBH->prepare("SELECT  cYearLevel, count(cYearLevel) as aa FROM tbl_account where cType = 'user'");
	$sql1->setFetchMode(PDO::FETCH_ASSOC);
	$sql1->execute();

	$data1 = array();
	foreach ($sql1 as $key) {
		$data1[] = $key;
	}

	print json_encode($data1);

?>
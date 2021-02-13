<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

use PhpOffice\PhpSpreadsheet\Helper\Sample;

require_once  '../../src/Bootstrap.php';

$helper = new Sample();



$pic = $_FILES['pic']['name'];
$pic_loc = $_FILES['pic']['tmp_name'];
$folder="sampleData/";
       if(move_uploaded_file($pic_loc,$folder.$pic))
        {
		$inputFileType = 'Xlsx';
		$inputFileName = __DIR__ . '/sampleData/' . $pic;

		$reader = IOFactory::createReader($inputFileType);
		$reader->setReadDataOnly(true);
		$spreadsheet = $reader->load($inputFileName);

		$DB_HOST = "localhost";
		$DB_USER = "root";
		$DB_PASS = "";
		$DB_NAME = "thesis";

		try
		{
			$DBH = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
			$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}



		        
		      
		        

		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		for($i = 2; $i <= count($sheetData); $i++){
			$xx = "'" . implode("','", $sheetData[$i]) . "'";
			$STH = $DBH->PREPARE("INSERT INTO tbl_student_subject (cAccIdNumber,cSubjectCode,cSubjectDescription,cTime,cProf,cRoom,cSchoolYear,cDay,cStatus)
					VALUES ($xx)");
					$STH->EXECUTE();
				}
}

echo "<script>alert('Student Added')</script>";
echo "<script>window.open('../../../templates/addstudent.php','_self')</script>";
<?php
require_once 'connection.php';
session_start();





// $STH = $DBH->PREPARE("INSERT INTO tbl_grade (cSubjectCode, cStudent, cType, cSemester)
//      VALUES (:txtsubject, :txtstudent, :txttype, :txtsemster)");
//      $STH->BINDPARAM(":txtsubject",$txtsubject);
//      $STH->BINDPARAM(":txtstudent",$txtidnumber);
//      $STH->BINDPARAM(":txttype",$txttype);
//      $STH->BINDPARAM(":txtsemster",$txtterm);
//      $STH->EXECUTE();


// $rows = [$txtterm, $txttype, $txtsubject, $txtidnumber)];

// $sql = "INSERT INTO tbl_grade (cSubjectCode, cStudent, cType, cSemester)
//      VALUES (:txtsubject, :txtstudent, :txttype, :txtsemster)";

// $STH = $DBH->prepare($sql);
// $STH->BINDPARAM(":txtsubject",$txtsubject);
// $STH->BINDPARAM(":txtstudent",$txtidnumber);
// $STH->BINDPARAM(":txttype",$txttype);
// $STH->BINDPARAM(":txtsemster",$txtterm);

// foreach($rows as $row)
// {
//     $STH->execute($row);
// }






// $datafields = array('cSubjectCode', 'cType', 'cSemester');
// $data = array('cSubjectCode' => ':txtsubject', 'cType' => ':txttype', 'cSemester' => ':txtsemster');

// function placeholders($text, $count=0, $separator=","){
//     $result = array();
//     if($count > 0){
//         for($x=0; $x<$count; $x++){
//             $result[] = $text;
//         }
//     }

//     return implode($separator, $result);
// }

// $DBH->beginTransaction(); // also helps speed up your inserts.
// $insert_values = array(':txtsubject', ':txttype', ':txtsemster');
// foreach($data as $d){
//     $question_marks[] = '('  . placeholders('?', sizeof($d)) . ')';
//     $insert_values = array_merge($insert_values, array_values($d));
// }

// $sql = "INSERT INTO tbl_grade (" . implode(",", $datafields ) . ") VALUES " .
//        implode(',', $question_marks);

// $stmt = $DBH->prepare ($sql);
// $stmt->BINDPARAM(":txtsubject",$txtsubject);
// $stmt->BINDPARAM(":txttype",$txttype);
// $stmt->BINDPARAM(":txtsemster",$txtterm);
// try {
//     $stmt->execute($insert_values);
// } catch (PDOException $e){
//     echo $e->getMessage();
// }
// $DBH->commit();



// $arr = explode(",", rtrim($txtterm , ', '));

// $max = count($arr);

// for ($i = 0; $i < $max; $i++)
// {
// $insertrow = $DBH->prepare("INSERT INTO tbl_grade (cSemester)  
// VALUES  (:txtsemster)", array(':txtsemster'=>$arr[$i]));   
// $insertrow->BINDPARAM(":txtsemster",$txtterm);
// $insertrow->EXECUTE();
// }





    $txtidnum = $_POST['txtidnumber'];
    $qwe = $_POST['txtsubject'];
    $name_array = $_POST['txtterm'];
    $age_array = $_POST['txttype'];
    $time =  date('H:i:s');
    $date = date('Y-m-d');
    $txtsubject = $_POST['txtsubject'];
    $prof = $_SESSION['user'];
    $sy = '2019-2020';
   $ran = rand(1,9999);
    



    for ($i = 0; $i < count($txtidnum); $i++) {

    $aaa = json_decode($txtidnum[$i]);
    $bbb = $aaa.'stuff';

  $txtgrade = $_POST[$bbb];

  

    if ($bbb == $txtidnum[$i].'stuff' && $txtgrade !== '') {

      $op = 0;
      foreach ($txtgrade as $value) {
        if ($value == '') {
    
      }else{


        
        $d =  explode('/', $value);

        if ($age_array == 'Quiz') {
           $tot = $d[0] / $d[1] * 35 + 65;
         }
        if ($age_array == 'Exam') {
           $tot = $d[0] / $d[1] * 35 + 65;
         }
        if ($age_array == 'Activity') {
           $tot = $d[0] / $d[1] * 35 + 65;
        }else{
       }


          $STH = $DBH->PREPARE("INSERT INTO tbl_grade (cSubjectCode, cStudent, cType, cSemester, cGrade, cTime, cDate, cProfessor, cSchoolYear, cUniId, cGradeOver, cGradetotal)
      VALUES (:subject, :student, :txttype, :txtsemster, :txtgrade, :timet, :dated, :prof, :sy, :ran, :over, :total)");
      $STH->BINDPARAM(":sy",$sy);
      $STH->BINDPARAM(":prof",$prof);
      $STH->BINDPARAM(":timet",$time);
      $STH->BINDPARAM(":dated",$date);
      $STH->BINDPARAM(":subject",$txtsubject[$i]);
      $STH->BINDPARAM(":student",$txtidnum[$i]);
      $STH->BINDPARAM(":txttype",$age_array);
      $STH->BINDPARAM(":txtsemster",$name_array);
      $STH->BINDPARAM(":txtgrade",$d[0]);
      $STH->BINDPARAM(":ran",$ran);
      $STH->BINDPARAM(":over",$d[1]);
      $STH->BINDPARAM(":total",$tot);
      $STH->EXECUTE();
    }

      }

  

  

  

   }
       
    } 








echo "<script>alert('Subject Added')</script>";
echo "<script>window.open('../templates/sample.php','_self')</script>";
?>
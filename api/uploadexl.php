<?php
require_once 'connection.php';
session_start();

 

        $asdasd = $_POST['txtsub'];


        $pic = rand(1000,10000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="../123/samples/Reader/sampleData";
        $ext = explode('.', $_FILES['pic']['name']);
        $extension = $ext[1];
        $pathname = $folder."".$pic;
       


        include '../123/samples/Reader/05_Simple_file_reader_using_the_read_data_only_option.php';


    echo "<script>alert('successfully uploaded')</script>";
    echo "<script>window.open('../templates/addstudent.php','_self')</script>";
    

?>
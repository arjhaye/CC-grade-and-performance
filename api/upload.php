<?php
require_once 'connection.php';
session_start();

 

        $STH = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
        $STH->execute();
        $row = $STH->fetch(PDO::FETCH_ASSOC);
        $id = $row['cPassword'];


        $pic = rand(1000,10000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="../img/";
        $ext = explode('.', $_FILES['pic']['name']);
        $extension = $ext[1];
        $pathname = $folder."".$pic;
        if(move_uploaded_file($pic_loc,$folder.$pic))
        {

            $STH = $DBH->prepare("UPDATE tbl_account SET cImage = :pic WHERE cAccIdnumber = :id");
            $STH->bindparam(":id",$id);
            $STH->bindparam(":pic",$pathname);
            $STH->execute();

            echo "<script>alert('successfully uploaded')</script>";
            echo "<script>window.open('../templates/studentprofile.php','_self')</script>";
}else{
    echo "<script>alert('error while uploading file')</script>";
}

?>
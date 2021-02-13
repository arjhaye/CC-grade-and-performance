<?php
require '../connections.php';
include 'index.php';
error_reporting(0);
?>
<?php
if(isset($_POST['btn-upload']))
{   
        date_default_timezone_set("Asia/Manila");
        $date = date("Y/m/d");
        $time = date("h:i:sa");
        $id = $_SESSION["userID"];
        $pic = rand(1000,10000)."-".$_FILES['pic']['name'];
        $pic_loc = $_FILES['pic']['tmp_name'];
        $folder="projects/";
        $ext = explode('.', $_FILES['pic']['name']);
        $extension = $ext[1];
        if(move_uploaded_file($pic_loc,$folder.$pic))
        {
            $sql = "INSERT INTO projects_tbl (StudentID,Name,Location,Tags,Subject,Discription,Type,DateUploaded,TimeUploaded) 
                VALUES ('".$_SESSION["userID"]."','".$pic."','".$folder.$pic."','".$_POST['tags']."','".$_POST['sub']."','".$_POST['tags']."','".$extension."','".$date."','".$time."')";

            if ($con->query($sql) === TRUE) {
           
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }
            ?><script>alert('successfully uploaded');</script><?php
        }
        else
        {
            ?><script>alert('error while uploading file');</script><?php
        } 
}

?>
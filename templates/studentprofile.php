<?php
require_once '../api/connection.php';
error_reporting(0);
session_start();
if(isset($_SESSION['user'])){

}else{
    echo "<script>window.open('index.php?loginFailed=true&reason=password','_self')</script>";
}


$sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
$txtid = $row['cPassword'];

                  
$sql = $DBH->prepare("SELECT * FROM tbl_account WHERE cAccIdNumber = :txtid");
$sql->bindparam(":txtid",$txtid);
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
$txtidno = $row['cAccIdNumber'];
$txtfname = $row['cFirstName'];
$txtlname = $row['cLastName'];
$txttype = $row['cType'];
$txtcourse = $row['cCourse'];
$txtdept = $row['cDepartment'];
$txtyl = $row['cYearLevel'];
$txtemail = $row['cEmail'];
$txtadd = $row['cAddress'];
$txtabout = $row['cAbout'];
$img = $row['cImage'];
                  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Profile
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


  <style type="text/css">
    .fcolor{
      color: white;
      background-color: #525f7f;
    }
  </style>


</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            <div class="photo">
              <img src="<?php echo $img ?>" alt="Profile Photo">
            </div>
          </a>
          <a href="studentprofile.php" class="simple-text logo-normal">
            <?php
              $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
              $sql->execute();
              $row = $sql->fetch(PDO::FETCH_ASSOC);
              echo $row['cUsername'];
            ?>
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php
              $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
              $sql->execute();
              $row = $sql->fetch(PDO::FETCH_ASSOC);
              if($row['cType'] == 'user'){
            ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="tim-icons icon-single-02"></i>
              <span class="menu-title">Student Profile</span>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="studentprofile.php"> <i class="tim-icons icon-single-02"></i> Profile </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="enrolledsubject.php"> <i class="tim-icons icon-book-bookmark"></i> Enrolled Subject </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewperformance.php"> <i class="tim-icons icon-align-left-2"></i> View Performance </a>
                </li>
              </ul>
            </div>
          </li>
          <?php }else{} ?>
          
           <?php
              $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
              $sql->execute();
              $row = $sql->fetch(PDO::FETCH_ASSOC);
              if($row['cType'] == 'ADMIN'){
            ?>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
              <i class="tim-icons icon-single-02"></i>
              <span class="menu-title">Faculty Profile</span>
            </a>
            <div class="collapse" id="auth1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="studentprofile.php"> <i class="tim-icons icon-single-02"></i> Profile </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addsubject.php"> <i class="tim-icons icon-simple-add"></i> Add Subject </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="addstudent.php"> <i class="tim-icons icon-simple-add"></i> Add Student Subject </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="studentlist.php"> <i class="tim-icons icon-book-bookmark"></i> Student List on Subject</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="studentperf.php"> <i class="tim-icons icon-align-left-2"></i> Student Performance </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="studentcheckprofile.php"> <i class="tim-icons icon-single-02"></i> Student Profiles </a>
                </li>
              </ul>
            </div>
          </li>
          <?php }else{} ?>
          <!-- <li>
            <a href="./map.html">
              <i class="tim-icons icon-pin"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active ">
            <a href="./user.html">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="tim-icons icon-align-center"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./rtl.html">
              <i class="tim-icons icon-world"></i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <!-- <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li> -->
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="<?php echo $img ?>" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="studentprofile.php" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <!-- <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li> -->
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="../api/signout.php" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="../api/updatestudprofile.php" method="post">

                  
                  
                  
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Student ID (disabled)</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo $txtidno ?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>First Name (disabled)</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo $txtfname ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Last Name (disabled)</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo $txtlname ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input name="txtemailadd" type="email" class="form-control" placeholder="Email" value="<?php echo $txtemail ?>">
                      </div>
                    </div>

                    <?php
                    $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
                    $sql->execute();
                    $row = $sql->fetch(PDO::FETCH_ASSOC);
                    if($row['cType'] == 'user'){
                    ?>

                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label>Course</label>
                        <select name="txtcourses" id="inputState" class="form-control">
                          <?php
                          if($txtcourse == "BSIT"){
                          echo '<option class="fcolor" value="BSIT">BSIT</option>';
                          echo '<option class="fcolor" value="BSCS">BSCS</option>';
                          echo '<option class="fcolor" value="BSOA">BSOA</option>';
                          echo '<option class="fcolor" value="ACT">ACT</option>';
                          echo '</select>';
                          }elseif($txtcourse == "BSCS"){
                          echo '<option class="fcolor" value="BSCS">BSCS</option>';
                          echo '<option class="fcolor" value="BSIT">BSIT</option>';
                          echo '<option class="fcolor" value="BSOA">BSOA</option>';
                          echo '<option class="fcolor" value="ACT">ACT</option>';
                          echo '</select>';
                          }elseif($txtcourse == "BSOA"){
                          echo '<option class="fcolor" value="BSOA">BSOA</option>';
                          echo '<option class="fcolor" value="BSIT">BSIT</option>';
                          echo '<option class="fcolor" value="BSCS">BSCS</option>';
                          echo '<option class="fcolor" value="ACT">ACT</option>';
                          echo '</select>';
                          }elseif($txtcourse == "ACT"){
                          echo '<option class="fcolor" value="ACT">ACT</option>';
                          echo '<option class="fcolor" value="BSIT">BSIT</option>';
                          echo '<option class="fcolor" value="BSCS">BSCS</option>';
                          echo '<option class="fcolor" value="BSOA">BSOA</option>';
                          echo '</select>';
                          }
                          ?>
                      </div>
                    </div>



                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label>Year Level</label>
                        <select name="txtyearlevel" id="inputState" class="form-control">
                          <?php if($txtyl == "4th Year"){
                            echo '<option class="fcolor" value="4th Year">4th Year</option>';
                            echo '<option class="fcolor" value="1st Year">1st Year</option>';
                            echo '<option class="fcolor" value="2nd Year">2nd Year</option>';
                            echo '<option class="fcolor" value="3rd Year">3rd Year</option>';
                            echo '</select>';
                          }elseif($txtyl == "3rd Year"){
                            echo '<option class="fcolor" value="3rd Year">3rd Year</option>';
                            echo '<option class="fcolor" value="1st Year">1st Year</option>';
                            echo '<option class="fcolor" value="2nd Year">2nd Year</option>';
                            echo '<option class="fcolor" value="4th Year">4th Year</option>';
                            echo '</select>';
                          }elseif($txtyl == "2nd Year"){
                            echo '<option class="fcolor" value="2nd Year">2nd Year</option>';
                            echo '<option class="fcolor" value="1st Year">1st Year</option>';
                            echo '<option class="fcolor" value="3rd Year">3rd Year</option>';
                            echo '<option class="fcolor" value="4th Year">4th Year</option>';
                            echo '</select>';
                          }elseif($txtyl == "1st Year"){
                            echo '<option class="fcolor" value="1st Year">1st Year</option>';
                            echo '<option class="fcolor" value="2nd Year">2nd Year</option>';
                            echo '<option class="fcolor" value="3rd Year">3rd Year</option>';
                            echo '<option class="fcolor" value="4th Year">4th Year</option>';
                            echo '</select>';
                          }
                        ?>
                      </div>
                    </div>

                    <?php }else{} ?>

                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input name="txtaddress" type="text" class="form-control" placeholder="Home Address" value="<?php echo $txtadd?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea name="txtaboutme" rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="<?php echo $txtabout ?>"><?php echo $txtabout ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                  </div>
                </form>
              </div>
              

            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <form action="../api/upload.php" method="post" enctype="multipart/form-data">

                    <a href="javascript:void(0)">
                      <img class="avatar" src="<?php echo $img ?>" alt="...">
                      <p class="description"><?php echo $txttype ?></p>
                      <h5 class="title"><?php echo $txtidno ?></h5>
                      <h5 class="title"><?php echo $txtfname,' ',$txtlname ?></h5>
                      <h5 class="title"><?php echo $txtcourse,' ',$txtyl ?></h5>
                      <h5 class="title"><?php echo $txtemail ?></h5>
                      <h5 class="title"><?php echo $txtadd ?></h5>
                    </a>
                  </div>
                </p>
                <div class="card-description">
                  <?php echo $txtabout ?>
                </div>
              </div>
              <!-- <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div> -->
            </div>
            <input type="file" name="pic">
            <button type="submit" class="btn btn-primary"> <i class="tim-icons icon-image-02"></i>
            &nbsp; Upload image
            </button>
            </form>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="tim-icons icon-send"></i>
            &nbsp; Message
            </button> -->

            <!-- Modal -->
            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="form-group">
                      <input style="color:orange;" class="form-control" type="" name="" placeholder="Recipient">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <textarea style="color:orange;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </div>
            </div> -->


          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">Subject Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Subject Code</th>
                        <th>Subject Description</th>
                        <th>Professor</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
                        $sql->execute();
                        $row = $sql->fetch(PDO::FETCH_ASSOC);
                        if($row['cType'] == 'user'){

                        $sql = $DBH->prepare("SELECT * FROM tbl_student_subject WHERE cAccIdNumber = :txtid");
                        $sql->bindparam(":txtid",$txtid);
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->execute();
                        while($row=$sql->fetch()) {
                        ?>

                      <tr>
                        <td><?php echo $row['cSubjectCode'] ?></td>
                        <td><?php echo $row['cSubjectDescription'] ?></td>
                        <td><?php echo $row['cProf'] ?></td>
                        <td><?php echo $row['cTime'] ?></td>
                        <td><?php echo $row['cDay'] ?></td>
                        <td><?php echo $row['cRoom'] ?></td>
                      </tr>

                      <?php } }else{

                        $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
                        $sql->execute();
                        $row = $sql->fetch(PDO::FETCH_ASSOC);
                        $txtuser = $row['cUsername'];

                        $sql = $DBH->prepare("SELECT * FROM tbl_prof_subject WHERE cProfessor = :txtuser");
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->bindparam(":txtuser",$txtuser);
                        $sql->execute();
                        while($row=$sql->fetch()) {
                        ?>

                        <tr>
                          <td><?php echo $row['cSubjectCode'] ?></td>
                          <td><?php echo $row['cSubjectDescription'] ?></td>
                          <td><?php echo $row['cProfessor'] ?></td>
                          <td><?php echo $row['cTime'] ?></td>
                          <td><?php echo $row['cDay'] ?></td>
                          <td><?php echo $row['cRoom'] ?></td>
                        </tr>
                        <?php }  }  ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>&nbsp;</th>
                        <th colspan="4" class="text-center">Prelim</th>
                        <th colspan="4" class="text-center">Midterm</th>
                        <th colspan="4" class="text-center">Finals</th>
                      </tr>
                      <tr>
                        <th>SubjectCode</th>
                        <th>Quiz</th>
                        <th>Activity</th>
                        <th>Exam</th>
                        <th >Total</th>
                        <th>Quiz</th>
                        <th>Activity</th>
                        <th>Exam</th>
                        <th>Total</th>
                        <th>Quiz</th>
                        <th>Activity</th>
                        <th>Exam</th>
                        <th>Total</th>
                        <th>Overall</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $idnum123 = $txtidno;
                      $term = 'Prelim';
                        $sql = $DBH->prepare("SELECT DISTINCT cSubjectCode FROM  tbl_grade where cStudent = :b");
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->BINDPARAM(":b",$idnum123);
                        $sql->execute();
                        while($row=$sql->fetch()) {
                        ?>
                      <tr>
                        <td>
                          <?php echo $row['cSubjectCode'];?>
                        </td>
                        <td>
                           <?php 
                          $sub = $row['cSubjectCode'];
                          $stud = $txtidno;
                          $typ = 'Quiz';
                          $term = 'Prelim';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $quiz = $row['yy'] / $row['tt'];
                            echo round($quiz) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Activity';
                          $term = 'Prelim';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $assignment = $row['yy'] / $row['tt'];
                            echo round($assignment) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Exam';
                          $term = 'Prelim';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $exam = $row['yy'] / $row['tt'];
                            echo round($exam) . "%";
                          }
                          ?>
                        </td>
                        <td class="text-center">
                          <?php 
                          $z1 = $exam * .40;
                          $x1 = $assignment * .30;
                          $c1 = $quiz * .30;
                          $t1 =  round($z1+$x1+$c1) . "%";
                          echo $t1;
                          ?>
                           
                         </td>
                         <td>
                           <?php 
                          
                          $stud = $txtidno;
                          $typ = 'Quiz';
                          $term = 'Midterm';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $quiz1 = $row['yy'] / $row['tt'];
                            echo round($quiz1) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Activity';
                          $term = 'Midterm';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $assignment1 = $row['yy'] / $row['tt'];
                            echo round($assignment1) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Exam';
                          $term = 'Midterm';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $exam1 = $row['yy'] / $row['tt'];
                            echo round($exam1) . "%";
                          }
                          ?>
                        </td>
                        <td class="text-center">
                          <?php 
                          $z2 = $exam1 * .30;
                          $x2 = $assignment1 * .40;
                          $c2 = $quiz1 * .30;
                          $t2 =  round($z2+$x2+$c2) . "%";
                          echo $t2;
                          ?>
                           
                         </td>
                         <td>
                           <?php 
                          
                          $stud = $txtidno;
                          $typ = 'Quiz';
                          $term = 'Finals';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $quiz2 = $row['yy'] / $row['tt'];
                            echo round($quiz2) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Activity';
                          $term = 'Finals';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $assignment2 = $row['yy'] / $row['tt'];
                            echo round($assignment2) . "%";
                          }
                          ?>
                        </td>
                        <td>
                           <?php 
                          
                          
                          $typ = 'Exam';
                          $term = 'Finals';
                          $STH = $DBH->prepare("SELECT *, count(cGrade) as tt, sum(cGradeTotal) as yy FROM tbl_grade WHERE cStudent=:stud and cType=:typ and cSemester = :ter and cSubjectCode = :sub ");
                          $STH->bindparam(":stud",$stud);
                          $STH->bindparam(":ter",$term);
                          $STH->bindparam(":typ",$typ);
                          $STH->bindparam(":sub",$sub);
                          $STH->execute();
                          while($row=$STH->fetch()) {
                            $exam2 = $row['yy'] / $row['tt'];
                            echo round($exam2) . "%";
                          }
                          ?>
                        </td>
                        <td class="text-center">
                          <?php 
                          $z3 = $exam2 * .30;
                          $x3 = $assignment2 * .40;
                          $c3 = $quiz2 * .30;
                          $t3 =  round($z3+$x3+$c3) . "%";
                          echo $t3;
                          ?>
                           
                         </td>
                         <td>
                           <?php
                           $tt = $t1 * .33;
                           $tt1 = $t2 * .67;
                           $tttMidterm = $tt + $tt1;
                           $tttFinals = $tttMidterm * .33 + $t3 * .67;
                           echo round($tttFinals) . '%';

                           ?>
                         </td>
                      </tr>
                      <?php
                    }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
      </div>
      <footer class="footer">
        <!-- <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div> -->
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
</body>

</html>
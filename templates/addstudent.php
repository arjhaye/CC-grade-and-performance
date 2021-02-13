<?php
require_once '../api/connection.php';

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
    Add Student
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
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      
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
            <a href="./dashboard.php">
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
            <a class="navbar-brand" href="javascript:void(0)">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              
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
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <div class="row">
                  <div class="col-9">
                    <h4 class="card-title">Add Student List</h4>
                  </div>
                </div>
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="myTable">
                    <thead class=" text-primary">

                    <div class="col-3 float-right">
                      <form action="../123/samples/Reader/05_Simple_file_reader_using_the_read_data_only_option.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="pic">
                      <div class="form-group">



                        <label for="exampleFormControlSelect1">Select Subject</label>
                          <select id="myInput" onclick="myFunction()" class="form-control " name="txtsub">
                          <?php
                            $sql = $DBH->prepare("SELECT * FROM tbl_login WHERE cUsername = '".$_SESSION['user']."'");
                            $sql->execute();
                            $row = $sql->fetch(PDO::FETCH_ASSOC);
                            $txtid = $row['cUsername'];

                            $sql = $DBH->prepare("SELECT * FROM tbl_prof_subject WHERE cProfessor = :txtid");
                            $sql->bindparam(":txtid",$txtid);
                            $sql->setFetchMode(PDO::FETCH_ASSOC);
                            $sql->execute();
                            while($row=$sql->fetch()) {
                            ?>
                            <option value="<?php echo $row['cSubjectCode'];?>" style="color: orange;"><?php echo $row['cSubjectCode'];?></option>
                          <?php
                          }
                          ?>
                        </select>

                        <button type="submit" class="btn btn-success btn-sm"><i class="tim-icons icon-simple-add"></i>&nbsp;Add Student(xls)</button>
                        </form>
                      </div>
                    </div>

                      <tr>
                        <th>Subject Code</th>
                        <th>Subject Description</th>
                        <th>Time & Day</th>
                        <th>Room</th>
                        <th>Professor</th>
                        <th>School Year</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        $sql = $DBH->prepare("SELECT * FROM tbl_prof_subject WHERE cProfessor = '".$_SESSION['user']."'");
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->execute();
                        while($row=$sql->fetch()) {
                        ?>

                        <tr>
                          <td><?php echo $row['cSubjectCode'];?></td>
                          <td><?php echo $row['cSubjectDescription'];?></td>
                          <td><?php echo $row['cTime']," (",$row['cDay'],")";?></td>
                          <td><?php echo $row['cRoom'];?></td>
                          <td><?php echo $row['cProfessor'];?></td>
                          <td><?php echo $row['cSchoolYear'];?></td>
                          <td>
                            
                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='addstudentonsubject.php?sid=<?php echo $row['cSubjectCode'];?>'"><i class="tim-icons icon-simple-add"></i>&nbsp;Add Student</button>

                          </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                  </table>

                    

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        
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


function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


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
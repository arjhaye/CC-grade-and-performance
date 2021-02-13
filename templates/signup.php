<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Black Dashboard CSS -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

    <style type="text/css">

.signin-container{
  margin-top:15%;
}

.signin-card{
  padding:40px 0px 20px;
  background: #27293d;
}

.signin-image{
  padding:0 2rem 2rem;
  margin:auto;
  display:block;
  width:70%;
}

.signin-form{
  max-width:350px;
  margin:auto;
}

.signin-btn{
  width:100%;
  margin-bottom:1.2rem;
}

.create-new-account{
  font-size:1.2rem;
  text-align:center;
  /* put display block so text align can work */
  display:block;
  margin-top:15px;
}
.fcolor{
  color: white;
  background-color: #525f7f;
}
    </style>
  </head>
  <body>
  <div class='container signin-container'>
   <div class='row'>
     <div class='col'></div>
     <div class='col-sm-12 col-md-8'>
       <div class="card signin-card">
        <div class="card-block">
          <form action="../api/signup.php" method="post" class='signin-form'>
            <div class="form-group">
                <input type="text" class="form-control" name="txtstudentid" placeholder="Student ID" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtfirstname" placeholder="First Name" required>
            </div>  
            <div class="form-group">
                <input type="text" class="form-control" name="txtlastname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <select name="txtcourse" id="inputState" class="form-control">
                <option selected class="fcolor">Course</option>
                <option class="fcolor">BSIT</option>
                <option class="fcolor">BSCS</option>
                <option class="fcolor">BSOA</option>
                <option class="fcolor">ACT</option>
              </select>
            </div>
            <div class="form-group">
              <select name="txtdepartment" id="inputState" class="form-control">
                <option selected class="fcolor">Department</option>
                <option class="fcolor">CCS</option>
                <option class="fcolor">CBA</option>
              </select>
            </div>
            <div class="form-group">
              <select name="txtyearlevel" id="inputState" class="form-control">
                <option selected class="fcolor">Year Level</option>
                <option class="fcolor">1st Year</option>
                <option class="fcolor">2nd Year</option>
                <option class="fcolor">3rd Year</option>
                <option class="fcolor">4th Year</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary signin-btn btn-lg"> Sign Up </button>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                  Already have an<a href='../index.php'> account?</a>
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
               
    <div class='col'></div>
    </div>
  </div>
  </body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script></body>
</html>
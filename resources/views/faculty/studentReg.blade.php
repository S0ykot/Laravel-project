<!DOCTYPE html>
<html class="no-js h-100" lang="en">
<head>
	<title>Add Student</title>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard </title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="/styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body class="h-100">
	<!-- <div class="color-switcher animated">
      <h5>Accent Color</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      <div class="actions mb-4">
          <i class="material-icons">book</i> Documentation</a>
      </div>
      <div class="social-wrapper">
        <div id="social-share" data-url="https://designrevision.com/downloads/shards-dashboard-lite/" data-text="🔥 Check out Shards Dashboard Lite, a free and beautiful Bootstrap 4 admin dashboard template!" data-title="share"></div>
        <div class="loading-overlay">
          <div class="spinner"></div>
        </div>
      </div>
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div>
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div> -->
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Faculty Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form  class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/home">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/studentReg">
                  <i class="material-icons">note_add</i>
                  <span>Add Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/studentDetails">
                  <i class="material-icons">vertical_split</i>
                  <span>Student List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/studentApproval">
                  <i class="material-icons">table_chart</i>
                  <span>Approve Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/topicAdd">
                  <i class="material-icons">table_chart</i>
                  <span>Add Topic</span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="/progressUpdate">
                  <i class="material-icons">table_chart</i>
                  <span>Progress Update</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/uploadFiles">
                  <i class="material-icons">table_chart</i>
                  <span>Upload files</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="/viewTopic">
                  <i class="material-icons">person</i>
                  <span>View Topic</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " href="/semesterDetails">
                  <i class="material-icons">person</i>
                  <span>Semester Details</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
              <div class="limiter">
                <div style="margin-left: 83%;height: 20%">
        <ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle mr-2" src="/images/avatars/Admin.jpg" alt="User Avatar">
              <span class="d-none d-md-inline-block"><%=userid%></span>
              </a>
              <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="/profile">
                    <i class="material-icons">&#xE7FD;</i> Profile</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/changePassword">
                      <i class="material-icons">&#xE7FD;</i> Change Password</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-danger" href="/logout">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
              </div>
            </li>
        </ul>
      </div>
    <div class="container-login100" style="width:1400px; margin-left:150px;">
      <div class="wrap-login101">
        <div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
          <span class="login100-form-title-1">
            Add Student
          </span>
        </div>

        <form method="POST" class="login101-form validate-form">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Academic Id is required">
            <input class="input100" type="text" name="userId" placeholder="Enter Academic ID (XX-XXXXX-X)">
            <span class="focus-input100"></span>
            <%if(error.userId){%>
                <b style="color: red;"><%= error.userId.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "First Name is required">
            <input class="input100" type="text" name="fname" placeholder="Enter First Name">
            <span class="focus-input100"></span>
              <%if(error.fname){%>
                <b style="color: red;"><%= error.fname.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Last Name is required">
            <input class="input100" type="text" name="lname" placeholder="Enter Last Name">
            <span class="focus-input100"></span>
            <%if(error.lname){%>
                <b style="color: red;"><%= error.lname.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
            <input class="input100" type="text" name="email" placeholder="Enter Valid Email">
            <span class="focus-input100"></span>
            <%if(error.email){%>
                <b style="color: red;"><%= error.email.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Contact No. is required">
            <input class="input100" type="text" name="phnNo" placeholder="Enter Contact Number">
            <span class="focus-input100"></span>
            <%if(error.phnNo){%>
                <b style="color: red;"><%= error.userId.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="CGPA is required">
            <input class="input100" type="text" name="cgpa" placeholder="Enter CGPA">
            <span class="focus-input100"></span>
            <%if(error.cgpa){%>
                <b style="color: red;"><%= error.cgpa.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Department is required">
            <input class="input100" type="text" name="dept" placeholder="Enter Department">
            <span class="focus-input100"></span>
            <%if(error.dept){%>
                <b style="color: red;"><%= error.dept.msg%></b>
            <%}%>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Credit is required">
            <input class="input100" type="text" name="credit" placeholder="Credit Completed (After This Semester)">
            <span class="focus-input100"></span>
            <%if(error.credit){%>
                <b style="color: red;"><%= error.credit.msg%></b>
            <%}%>
          </div>

          

          <div id="login100-form-Btn">
            <button class="login101-form-btn">
              Register
            </button>
          </div>

          </div>
        </form>
      </div>
    </div>
  </div>
    </footer>
  </div>
	
	
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

</body>
</html>
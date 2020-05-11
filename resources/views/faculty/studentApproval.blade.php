<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Approval</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="/styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript">
      function find(){
      var key = document.getElementById('search').value;
      var xhttp = new XMLHttpRequest();
      xhttp.open("GET", "http://localhost:3000/studentApproval/inSearch/"+key, true);
      xhttp.send();
        xhttp.onreadystatechange = function() {
          if (this.status==404) {
            document.getElementById('test').innerHTML="No Data Found";
          }
          else
          {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById('test').innerHTML = this.responseText;
          }
          }
        };
    }
    </script>
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
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
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
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li>
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
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Student Approval</h3>
              </div>
            </div>
             <div class="input-group input-group-seamless ml-3">
              <input id="search" class="navbar-search form-control" type="text" placeholder="Search Student" aria-label="Search" onkeyup="find()"></div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!-- <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div> -->
                  <div class="card-body p-0 pb-3 text-center" id="test">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Student ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">CGPA</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Complete Credit</th>
                          <th scope="col" class="border-0">Reg Date</th>
                          <th scope="col" class="border-0">Status</th>
                          <th scope="col" class="border-0" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <%if(!data){%>
                          <td colspan="11" align="center">No Data</td>
                        <%} else {%>

                            <%for(var i=0;i<data.length;i++){%>
                            <tr>
                              <td><a href="/studentApproval/download/<%=data[i].ver_id%>"><%=data[i].student_id%></a></td>
                              <td><%=data[i].student_fname%></td>
                              <td><%=data[i].student_lname%></td>
                              <td><%=data[i].student_email%></td>
                              <td><%=data[i].student_contact%></td>
                              <td><%=data[i].student_cgpa%></td>
                              <td><%=data[i].student_dept%></td>
                              <td><%=data[i].student_credit%></td>
                              <td><%=data[i].student_regDate%></td>
                              <%if (data[i].status){%>
                                <td>Active</td>
                              <%}
                              else {%>
                                  <td>Inactive</td>
                                  <%}%>
                                <td><a href="/studentApproval/approve/<%=data[i].sid%>"><button>Approve</button></a></td>
                            </tr>
                            </tr>
                            <%}%>
                        <%}%>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Default Dark Table -->
            <!-- End Default Dark Table -->
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            
          </footer>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="/scripts/extras.1.1.0.min.js"></script>
    <script src="/scripts/shards-dashboards.1.1.0.min.js"></script>
  </body>
</html>
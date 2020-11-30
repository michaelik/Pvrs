<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="this is a web base application that is use to verified if the project submitted by a single/group of student is already available in the databases.">
  <meta name="author" content="Michael Ikechukwu Fortune">
  <meta property="site_name"   content="ProjectVRS.com">
  <title>SB Admin - Start Bootstrap Template</title>
  <!--use to add icon to website tab bar-->
  <link rel="shortcut icon" sizes="144*144" href="../icon/3DCIRCLE1.jpg" type="image/jpg" />
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../dashboardcss/sb-admin.css" rel="stylesheet">
  <!--bootstrapValidattor-->
  <link rel="stylesheet" href="../css/bootstrapValidator.css"/> 
  <!---->
  <link rel="stylesheet" href="../css/jquery.jgrowl.min.css"/> 
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Form">
          <a class="nav-link" href="AddSupervisor.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Add supervisor</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Table">
          <a class="nav-link" href="Supervisor.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">View Supervisor</span>
          </a>
        </li>
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>-->

        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
          </ul>
        </li>-->

        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>-->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
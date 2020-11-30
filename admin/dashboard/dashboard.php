<?php
  session_start();
  if(!isset($_SESSION["login"])){
        header("location:../index.php");
       }
?>
<?php include("../head.php");?>
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Welcome Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>WELCOME</h1>
        </div>
      </div>
    </div>
<?php include("../foot.php");?>

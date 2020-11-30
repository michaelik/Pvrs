<?php
  session_start();
  if(!isset($_SESSION["login"])){
        header("location:../indexx.php");
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
        <li class="breadcrumb-item active">Add Supervisor</li>
      </ol>

<div class="row">
	<div class="col-md-4">
     <span class="error-msg">
     <?php 
        if(isset($_GET['error']))
           {
              echo "The Username and Password is taken";
           } 
      ?> 
      </span>
		<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form-horizontal" id="defaultForm">
      
      <div class="form-group">
				<label class="control-label">Username:</label>
        <div class="col-lg-12">
				<input type="text" name="username" class="form-control" >
      </div>
			</div>

			<div class="form-group">
				<label class="control-label">Password:</label>
        <div class="col-lg-12">
				<input type="text" name="password" class="form-control" >
      </div>
			</div>

    <div class="form-group">
			<button type="submit" class="btn btn-xs btn-primary">Submit</button>
      <!--<input type="submit" name="login" value="login"/>-->
    </div>
		</form>
    </div>
    <!-- this is were the server handle the request -->
    <?php
      if($_SERVER["REQUEST_METHOD"] == "POST" or isset($_POST)){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
      	//$username = $_POST['username'];
        //$password = $_POST['password'];
        $username = htmlspecialchars(stripslashes(trim($_POST["username"])));
        $password = htmlspecialchars(stripslashes(trim($_POST["password"])));
        require_once("../connection.php");//invoke the connection
        $query = mysqli_query($con,"SELECT * FROM auth WHERE username='".$username."' AND password='".$password."'")or die("can't connect to database".mysql_error());
      	$count= mysqli_num_rows($query);
	     if($count == 1)
		   {
			while($row = mysqli_fetch_assoc($query))
		    {
				$user=$row['username'];
				$pass=$row['password'];
	      }  
        if($username == $user && $password == $pass)
				{
          //set up the session
					//$_SESSION["login"] = "1";
				  //Redirected browser
          header("location:AddSupervisor.php?error=1");
				}
		}else{
        $query = $con->query("INSERT INTO auth(username,password)VALUES('$username','$password') ");

        if($query){ ?>
         <script>
         	alert("User added !");
         	window.location = 'AddSupervisor.php';
         </script>
        <?php

        }
      }
    }
  }
    ?>
    </div>
   </div>
</div>



<?php include("../foot.php");?>
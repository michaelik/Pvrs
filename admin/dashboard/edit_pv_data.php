<?php
  session_start();
  if(!isset($_SESSION["login"])){
        header("location:../indexx.php");
       }
?>
<?php require("../connection2.php");//invoke the connection?>
<?php include("../head.php");?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">View Projects</li>
      </ol>
          <?php
          if(isset($_GET['id']) AND !empty($_GET['id'])){
            $id = $_GET['id'];
            $query = $db->query("SELECT * FROM auth WHERE id = '$id' ");
            $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
                    $name = $row->username;
                    $id = $row->id;
                    $passkey = $row->password;
                  }
            }else{
                  header('location: Supervisor.php');
                 }
        ?>
        <div class="row">
	<div class="col-md-4">
		<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form-horizontal" id="defaultForm">
			<div class="form-group">
      <span class="error-msg">
<?php 
if(isset($_GET['error']))
{
  echo "Unable To Update to database";
}else{
    echo "the field must not be empty";
} 
?> 
</span>
      <div class="form-group">
				<label class="control-label">Username:</label>
        <div class="col-lg-12">
				<input type="text" value="<?php echo $name; ?>" name="username" class="form-control" >
      </div>
			</div>

			<div class="form-group">
				<label class="control-label">Password:</label>
        <div class="col-lg-12">
				<input type="text" value="<?php echo $passkey; ?>" name="password" class="form-control" >
      </div>
			</div>
    <div class="form-group">
            <input type="hidden" name="pv_id" value="<?php echo $id; ?>">
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
        $pv_id = htmlspecialchars(stripslashes(trim($_POST["pv_id"])));
        require_once("../connection.php");//invoke the connection
        $query = mysqli_query($con,"UPDATE auth set username = '$username',password = '$password' WHERE id = '$pv_id' ")or die("can't connect to database".mysql_error());
      

        if($query){ ?>
         <script>
         	alert("User Updated !");
         	window.location = 'Supervisor.php';
         </script>
        <?php

        }else{
            header("location:edit_pv_data.php?error=1");
        }
      }
      
    }
  ?>

   </div>
    </div>
<?php include("../foot.php");?>
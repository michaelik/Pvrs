<?php
#error_reporting(0);
 session_start();
/*
 * DEVELOPER:michael ikechukwu fortune
 * APP:project verification and registration system
 * IDE:sublime text and Visual studio code
 * DATE:12/11/2017
*/
//$base_url="http://localhost/My_project_life1/";

if($_SERVER["REQUEST_METHOD"]=="POST" or isset($_POST)){
	 //$_SESSION['last_time'] = time();
   //if(isset($_POST['login'])){
   	if(!empty($_POST['username']) && !empty($_POST['password'])){
	//store vale in variable.
   	$_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = $_POST["password"];
	$username = htmlspecialchars(stripslashes(trim($_POST["username"])));
	$password = htmlspecialchars(stripslashes(trim($_POST["password"])));
	//$username = $_POST["username"];
	//$password = $_POST["password"];
	require_once("connection.php");//invoke the connection
	//selecting database
	$query = mysqli_query($con,"SELECT * FROM auth WHERE username='".$username."' AND password='".$password."'")or die("can't connect to database".mysql_error());
	$count= mysqli_num_rows($query);
	if($count == 1)
		{
			while($row = mysqli_fetch_assoc($query))
		  {
				$user=$row['username'];
				$pass=$row['password'];
	      }  
	           
				/*if($username == $user && $password == $pass)
				{
                header("location:<?php echo $base_url?>supervisor.php");
				}
				else
				{
					$name_error="username is not available";
					$password_error="password is not available";
				}*/
				if($username == $user && $password == $pass)
				{
                   //set up the session
					$_SESSION["login"] = "1";
				  //Redirected browser
                  header("location:dashboard/dashboard.php");
				}
		}
		else
			{
				//echo '<script>alert("Invalid Username or Password");</script>';
				if($username && $password)
				{
					//echo '<script>alert("Invalid Username or Password");</script>';
	                header("location:index.php?error=1");
			      //$name_error="Invalid username";
                  //$password_error="Invalid password";
				}
				/*elseif($password)
				{
				 $password_error="Invalid password";	
				}*/
			}
			$con->close();
		}	
   }
?>
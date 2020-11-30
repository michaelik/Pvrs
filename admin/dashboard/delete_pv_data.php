<?php
 require '../connection2.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->query("DELETE FROM auth WHERE id = $id ") or die("can not connect to database".mysqli_error());
	header('location: Supervisor.php');
}
<?php
//FITTING THIS LINE OF CODE WAS NOT EASY
 require 'admin/connection.php';
 $project_name = $_POST['project_name'];
 $project_level = $_POST['project_level'];
 $project_case = $_POST['project_case'];
$query = mysqli_query($con,"SELECT * FROM project WHERE project_name ='".$project_name."' AND project_level ='".$project_level."' AND project_case ='".$project_case."'")or die("can't connect to database".mysql_error());
$count = mysqli_num_rows($query);
if($count == 1){
       while ($row = mysqli_fetch_assoc($query)) {
       	$pname = $row['project_name'];
       	$plevel = $row['project_level'];
       	$pcase = $row['project_case'];
       }
if($pname == $project_name && $plevel == $project_level && $pcase == $project_case){
    //echo 'false';
    header("location:create-project.php?error=1");
    
      }
  }
else{
     $query1 = mysqli_query($con,"INSERT INTO project(project_name,project_level,project_case,allocation)VALUES('$project_name','$project_level','$project_case',0)");
    if($query1){
               header("location:create-project.php");
          }
  }

/* require 'init.php';
 if (
     isset($_POST['project_name'])&&
     isset($_POST['project_level'])&&
     isset($_POST['project_case'])
    ) {
        $project_name = $_POST['project_name'];
        $project_level = $_POST['project_level'];
        $project_case = $_POST['project_case'];
        $query = "SELECT * FROM project 
                  WHERE project_name = :project_name 
                  AND project_level = :project_level 
                  AND project_case = :project_case");
        $check = $db->prepare($query);
        $check->execute(array(':project_name'=> $project_name,':project_level'=> $project_level,':project_case'=> $project_case));
        $rows = $check->fetch(PDO::FETCH_ASSOC);
        if ($rows['id'] > 0) {
            if ( $project_name == $rows['project_name']  &&
                 $project_level == $rows['project_level']  &&
                 $project_case == $rows['project_case'] 
               ) { 
                  /*if ( $project_name == $rows['project_name']  &&
                       $project_level == $rows['project_level']  &&
                       $project_case == $rows['project_case'] 
                     ) {
                     echo 'false';
                  }*/
    /*              echo 'false';                             
            }else{
                 $query = "INSERT INTO project(project_name,project_level,project_case,allocation)VALUES('$project_name','$project_level','$project_case',0)";
                    $win = $db->prepare($query);
                      if ($win) {
                          echo 'true';
                      }
                    
            }
        }
  }*/


 /*$query = $db->query("INSERT INTO project(project_name,project_level,project_case,allocation)VALUES('$project_name','$project_level','$project_case',0)");

 if($query){
  echo 'true';

 }else{
  echo 'false';
 }
*/

?>
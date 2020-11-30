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
        <li class="breadcrumb-item active">View Projects</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Option</th>
                </tr>
              </tfoot>
              <tbody>
        <?php
           require("../connection2.php");//invoke the connection
            //mysqli_query($con,"SELECT * FROM auth");
            //$query = $con->query("SELECT * FROM auth");
           //$count = mysqli_num_rows($query);
           //if($count == 1){
                  //while($rows = mysql_fetch_assoc($query)){
                    //$id = $rows['id'];
                    //$user = $rows['username'];
                    //$pass = $rows['password'];
                 // }
                  //    $rows = $query->fetch_array();
                  // foreach($rows as $row){
                  //   $id = $row['id'];
                  //   $name = $row['username'];
                  //   $password = $row['password'];
       
           $query = $db->query("SELECT * FROM auth");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
              foreach($rows as $row){
                $name = $row->username;
                $id = $row->id;
                $passkey = $row->password;
       ?>
                  
         <tr>
             	<td><?php echo $id; ?></td>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $passkey; ?></td>
               <td>
             	    <a class="btn btn-xs btn-primary" href="edit_pv_data.php?id=<?php echo $row->id; ?>">
                   <i class="fa fa-edit"></i>
                   </a>
             		  <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete project? ')" href="delete_pv_data.php?id=<?php echo $row->id; ?>">
                   <i class="fa fa-trash"></i>
                   </a>
             	</td>
        </tr>
        <?php
                  }
          //}
      // }
        ?>
	        </tbody>
        </table>
      </div>
     </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>



      </div>
    </div>
<?php include("../foot.php");?>
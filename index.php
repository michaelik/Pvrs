<!--
THIS IS MY ND2 FINAL PROJECT, WRITTEN
BY MICHEAL IKECHI,
-->
<?php require 'init.php';?>
<?php include 'head.php';?>
<body background="image/bg2.jpg">
   <div class="container-fluid start-container">
     <div class="col-md-6 title-text">
        <img src="image/polylogo.png" class="img-rounded img-responsive" width="100" height="100">
       	<h4>Moshood Abiola Polytechnic, Abeokuta</h4>
       	<h1>STUDENTS' PROJECT VERIFICATION & REGISTRATION SYSTEM</h1>
     </div>
     <!-- start form -->
     <div class="col-md-4 col-md-push-2">
     	<?php include 'login_form.php';?>
     </div>
     <!--end form-->
   </div>
   <!--start modal-->
   <div class="modal fade" id="modal-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">PASSWORD RECOVERY</h3>
           </div>
           <div class="modal-body">
             please contact the administrator via mikeikechi3@gmail.com to recover your password!
           </div>
           <div class="modal-footer">
             <a href="" class="btn btn-primary" data-dismiss="modal">Close</a>
           </div>
        </div>
      </div>
    </div>
  <!--end modal-->
<?php include 'footer.php';?>

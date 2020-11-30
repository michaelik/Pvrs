<?php //error_reporting(0);?>
<?php $base_url="http://localhost/My_project_life1/";?>
<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="this is a web base application design to verified if the project submitted by a single/group of student is already available in the databases.">
  <meta name="author" content="Michael Ikechukwu Fortune">
  <meta property="site_name"   content="ProjectVRS.com">
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <title>Project Verification and Registration System</title>
 <!---->
 <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/pelo.css">
  <link rel="stylesheet" href="css/bootstrapValidator.css"/>  
  <link rel="stylesheet" media="screen" href="css/style.css"> 
  <!--use to add icon to website tab bar-->
  <link rel="shortcut icon" sizes="144*144" href="icon/3DCIRCLE1.jpg" type="image/jpg" />    
</head>
<body id="particles-js">
<?php require_once("Register.php"); ?>
 <div class="login-form">
<div class="login-face"><img src="img/download.jpg"></div>
<section class="form">
<h2 style="text-align:center;font-size:20px;">Fill the <u>Form</u> below</h2>
<span class="error-msg">
<?php 
if(isset($_GET['error']))
{
  //$error=$_GET['error'];
  echo "Invalid username or password";
} 
?> 
</span>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form-horizontal" id="defaultForm">
	<!--<div class="input uname">
		<input type="text" placeholder="username" id="username"/>
		<i class="fa fa-user"></i> 
	</div>-->
	<!--<div class="input pass">
		<input type="password" placeholder="password" id="password"/>
		<i class="fa fa-lock"></i>
	</div>-->
	  <div class="form-group li"> 
	       <div class="col-lg-12">
           <input type="text" class="form-control" placeholder="username" value="<?php $username ?>" name="username" />
           </div>
      </div>
        <!--<span class="error-msg"><?php //$error ?></span>--> 
      <div class="form-group lo">
           <div class="col-lg-12">
           <input type="password" class="form-control" placeholder="password" value="<?php $password ?>" name="password" />
           </div>
      </div>
        <!--<span class="error-msg"><?php //$password_error ?></span>-->
	<!--<a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,Arial;margin-bottom: 10px;" data-toggle="modal" data-target="#modal-1">lost your password?</a>-->
   <br> 
	<div>
		<input type="submit" name="login" value="login"/>
	</div>
</form>
</section>
</div>
 








        
	   
          <!-- scripts -->
          <script src="jss/particles.min.js"></script>
          <script src="jss/particles.js"></script>
          <script src="jss/app.js"></script>
          <!-- jQuery -->
          <script type="text/javascript" src="jss/jquery-1.10.2.min.js"></script>
          <!-- Bootstrap Core JavaScript -->
          <script src="jss/bootstrap.min.js"></script>
          <!-- -->
          <script type="text/javascript" src="jss/js/bootstrapValidator.js"></script>
          
<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and can\'t be empty'
                        },
                      stringLength: {
                            min: 4,
                            max: 20,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        /*remote: {
                            url: 'Register.php',
                            message: 'The username is not available'
                        },*/
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number,  dot and underscore'
                        }
                    }
                },
               /*email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },*/
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },
                       /* digits: {
                                message: 'The value can contain only digits'
                            },*/
                        stringLength: {
                            min: 6,
                            max: 20,
                            message: 'The password must be more than 6 and less than 12 digits long'
                        }
                    }
                }
            }
        })
        /*.on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });*/
});
</script>
        
</body>
</html>
 
<div class="well">
    <h3>Admin Login</h3>
	<form method="post" autocomplete="off" action="" id="login_form1">
		<div class="form-group">
			<label class="control-label">Username:</label>
			<input type="text" name="username" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="control-label">Password:</label>
			<input type="password" name="password" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-sm btn-primary">Log in</button>
	</form>
</div>

<div class="well">
	<label><a href="#" data-toggle="modal" data-target="#modal-1">Forget Password ?</a></label>
</div>

<script type="text/javascript">
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{
				$.jGrowl("Logging Into The System, Please Wait......", {sticky: true});
				$.jGrowl("Welcome To Student's Project Verification and Registration System", {header: 'Access Granted'});
				var delay = 5000;//This is 5 millisecond. 
				setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Please Check your username and Password", {header: 'Login Failed'});
			}
			}
		});
		return false;
	});
});
</script>
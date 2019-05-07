<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<center><h2>Admin SignUp</h2></center>
	<form method="post" action="signup.php">
		<label for="username">Username</label>
		<input type="text" name="username" placeholder="Enter a username">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<label for="c_password">Confirm Password</label>
		<input type="password" name="c_password" id="c_password">
		<input type="submit" name="submit" value="Sign Up">
		<a href="loginform.php">Click to login</a>
	</form>	
	<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script type="text/javascript">
		$(document).ready(function(){
			alert("Welcome!!");
		})
		$("#c_password").keypress(function(e){
			var pass =$("#password").val();
			var cpass =$("#password").val();
			if (pass !== cpass) {
				console.log("Passwords don't match");
			}
		})
	</script>
</body>
</html>
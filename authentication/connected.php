<!DOCTYPE html>
<html>
<head>
  <title> Database App</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<?php 
  
  require "connectdb.php";

?>

<h2>Sign in</h2>

<form action="dosomething" method="post">



<div class="row">
    <div class="input-field col s6">
      <input placeholder = "Email" id="email" type="email" class="validate">
      <!-- <label for="email">Email</label> -->
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input placeholder = "Password" id="password" type="password" class="validate">



    Username: <input type="text" name="username" maxlength="5" placeholder="username" />
	<br><br>
	<!-- We can use every attribute we just used above for customizing this text field(password field) -->
	Password: <input type="password" name="password" placeholder = "Password">
	<br><br>
	<input type = "submit" value = "Log In"/> 
	<input type = "button" onclick="myfunction()" value="Sign Up">
</form>	

<script type="text/javascript">
	function myfunction() {
		window.location.href = "form.html";
	}
</script>
</body>
</html>
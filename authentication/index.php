<HTML>
<HEAD>
<TITLE>Authenicate Yourself</TITLE>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="materialize.min.css">
<script src="materialize.min.js"></script>
<link href="icon.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.11.3.min"></script>
</HEAD>
<BODY>
<h3 style="color: #26a69a; margin-left: 20px">User Log In form</h3><br>
   
    <form class="col s12" action = "login.php" >
         <div class="row">
        <div class="input-field col s6">
          <input placeholder = "Email" id="email" type="email" class="validate">
          <!-- <label for="email">Email</label> -->
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s6">
          <input placeholder = "Password" id="password" type="password" class="validate">
        </div>
      </div>
    </form>
  </div>


  <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 18px;" onclick="login()">Login
  
    <i class="material-icons right">vpn_key</i>

  </button>

  <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 18px;" onclick="signup()">Sign Up!
    <i class="material-icons right">lock</i>
    <i class="material-icons right">vpn_key</i>

  </button>
<div id="status" style="padding: 30px"></div>




<script type="text/javascript">

  // $("body").css("background", "red");


	function login() {

    var email = $("#email").val(),
      password = $("#password").val(); 

    $.post("php/authenticate.php", {email: email, password: password }, function(data) {
        alert(data);
        if(data === "success") alert("22 att kra ditti");
        window.location.href = "../"; 
    });



	}

	function signup() {
		window.location.href = "form.php";
	}

</script>

</BODY>
</HTML>

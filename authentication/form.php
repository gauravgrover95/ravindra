<HTML>
<HEAD>
<TITLE>Authenicate Yourself</TITLE>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="materialize.min.css">
<script src="materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href = "css/animate1.css">
<script type="text/javascript" src="js/jquery-1.11.3.min"></script>
</HEAD>
<BODY>
<h3 style="color: #26a69a; margin-left: 20px">User Sign Up Form!!</h3><br>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s3">
          <!-- <label for="first_name">First Name</label> -->

          <input placeholder="First Name" id="first_name" type="text" class="validate"><br>
        </div>
        <div class="input-field col s3">
          <input placeholder = "Last Name" id="last_name" type="text" class="validate">
          <!-- <label for="last_name">Last Name</label> -->
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s6">
          <input placeholder = "Email" id="email" type="email" class="validate">
          <!-- <label for="email">Email</label> -->
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s6">
          <input placeholder = "Password" id="password" type="password" class="validate">
          <!-- <label for="password">Password</label> -->
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input placeholder = "Confirm Password" id="cpassword" type="password" class="validate">
          <!-- <label for="password">Password</label> -->
        </div>
      </div>

    </form>
  </div>


  <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 18px;" onclick="register()">Submit
    <i class="material-icons right">done</i>
  </button>


<div id="status" style="padding: 30px"></div>
  
<script type="text/javascript">
    console.log(valid);
</script>

<script type="text/javascript">
    function register() {
        var fname = $("#first_name").val(),
            lname = $("#last_name").val(),
            email = $("#email").val(),
            password = $("#password").val();
            cpassword = $("#cpassword").val()
        $.post( "php/register.php", {fname: fname, lname: lname, email: email, password: password, cpassword: cpassword}, function(data) {
          alert(data);
          if(data === "Updated data successfully\nNow you may login with ur credentials") {
            window.location.href = "../index.html";
          }
        });
    }
</script>


</BODY>
</HTML>

<html>
<head>
	<title>DOHub: Login</title>
	<?php
    include('bootstrapTop.php');
  ?>

</head>
<body>

  <?php
    include('navbar.php');
  ?>
  <div id="wrap">
  <div class = "container">
  	<h2 class = "form-signin-heading">Please sign-in</h2><br>
  	<form method = "post" id = "formBox" onsubmit="JavaScript: return check();" class = "input-block-level">
  		<h4>
  			Username: <br>
  			<input type = "text" id = "username" name = "username" maxlength = "75" class = "input-block-level" style = "max-width: 300px;"><br>
  			Password: <br>
  			<input type = "password" id = "password" name = "password" maxlength = "75" class = "input-block-level" style = "max-width: 300px;"><br>
  			<input type = "submit" id = "Login" name = "Login" value = "Login" onsubmit = "JavaScript: return check();" class = "btn btn-large btn-success"><br>
  		</h4>
  	</form>

  <!-- <?php
    // echo form_open();

    // echo "<h4>";
    // echo form_input('email');
    // echo "<br>";

    // echo form_password('password');
    // echo "<br>";

    // echo form_submit('login_submit', 'Login');
    // echo "</h4>";

    // echo form_close();
  ?> -->

  </div>
</div>

	<!--<script type="text/javascript">

	function check()
	{
		var username = document.forms["formbox"]["username"].value;
		var password = document.forms["formbox"]["password"].value;
		var error = true;
		var errormessage = null;

		if(username == null || username == "")
		{
			document.forms["formbox"]["username"].style.borderColor="red";
			document.forms["formbox"]["username"].style.backgroundColor="#E799A3";
			errormessage += "Enter your username. <br>";
			error = false;
		}

		if(password == null || username == "")
		{
			document.forms["formbox"]["password"].style.borderColor="red";
			document.forms["formbox"]["password"].style.borderColor="red";
			errormessage += "Enter your password.";
			error = false;
		}

		return error;
	}

	</script> -->

	 <?php
    include('footer.php');
   ?>
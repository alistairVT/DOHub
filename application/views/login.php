<html>
<head>
	<title>DOHub: Login</title>
	<link href="<?php echo(CSS.'bootstrap.min.css'); ?>" rel="stylesheet">
	 <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
	 <link href="<?php echo(CSS.'bootstrap-responsive.css'); ?>" rel="stylesheet">

</head>
<body>
<div class = "container">
	<h1 class = "form-signin-heading">Please sign-in</h1><br>
	<form method = "post" id = "formBox" onsubmit="JavaScript: return check();" class = "input-block-level" action = "#">
		<h4>
			Username: <br>
			<input type = "text" id = "username" name = "username" maxlength = "75" class = "input-block-level" style = "max-width: 300px;"><br>
			Password: <br>
			<input type = "password" id = "password" name = "password" maxlength = "75" class = "input-block-level" style = "max-width: 300px;"><br>
			<input type = "Submit" id = "Login" name = "Login" value = "Login" onsubmit = "JavaScript: return check();" class = "btn btn-large btn-primary"><br>
		</h4>
	</form>
</div>

	<script type="text/javascript">

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

	</script>

	 <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo(JS.'jquery.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-transition.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-alert.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-modal.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-dropdown.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-scrollspy.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-tab.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-tooltip.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-popover.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-button.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-collapse.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-carousel.js'); ?>"></script>
    <script src="<?php echo(JS.'bootstrap-typeahead.js'); ?>"></script>
</body>
</html>
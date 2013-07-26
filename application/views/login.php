<html>
<head>
	<title>DOHub: Login</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
	 <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

</head>
<body>

	<center><h1>Login</h1></denter>
	<form method = "post" id = "formBox" onsubmit="JavaScript: return check();" action = "#">
		<h4>
			Username: <br>
			<input type = "text" id = "username" name = "username" maxlength = "75"><br>
			Password: <br>
			<input type = "password" id = "password" name = "password" maxlength = "75"><br>
			<input type = "Submit" id = "Login" name = "Login" value = "Login" onsubmit = "JavaScript: return check();"><br>
		</h4>
	</form>

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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
</body>
</html>
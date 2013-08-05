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
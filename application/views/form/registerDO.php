	Registration <br>

<form action="" method="post" id="formbox" onsubmit="JavaScript:return check();">
		<div style="font-size:20px !important;padding-bottom:7px;border-bottom:1px solid #aaa;margin-bottom:10px;padding-left:10px">
		<b>Register Disciplinary Officer</b>
		</div>
		
		<b>Username</b></br>
		<input type="text" placeholder="Username" id = "username" name="username" maxlength="8" autofocus/><br/>
		<b>First Name</b></br>
		<input type="text" placeholder="First Name" id = "fname" name="firstname" maxlength="75"/><br/>
		<b>Last Name</b></br>
		<input type="text" placeholder="Last Name" id = "lname" name="lastname" maxlength="75"/><br/>
		<b>Email</b></br>
		<input type="text" placeholder="email" id = "email" name="email" maxlength="75"/><br/>
		<b>Contact Number</b></br>
		<input type="text" placeholder="contact number" id = "contactno" name="contactno" maxlength="75"/><br/>

		<input id="submit" class="button" type="submit" value="Register"/>
	</form>

	<div class="clear"></div> </div> 

	<script type="text/javascript">

	function check()
	{
		var username = document.forms["formbox"]["username"].value;
		var fname = document.forms["formbox"]["firstname"].value;
		var lname = document.forms["formbox"]["lastname"].value;
		var email = document.forms["formbox"]["email"].value;
		var contactno = document.forms["formbox"]["contactno"].value;
		var errorbox=document.getElementById("errormessage");

		var error = false;

		if(username == null || username == "")
		{
			document.forms["formbox"]["username"].style.borderColor = "red";
			document.forms["formbox"]["username"].style.backgroundColor = "#E799A3";
			error = true;
		}

		if(fname == null || fname == "")
		{
			document.forms["formbox"]["firstname"].style.borderColor = "red";
			document.forms["formbox"]["firstname"].style.backgroundColor = "#E799A3";
			error = true;
		}

		if(lname == null || lname == "")
		{
			document.forms["formbox"]["lastname"].style.borderColor = "red";
			document.forms["formbox"]["lastname"].style.backgroundColor = "#E799A3";
			error = true;
		}

		if(email == null || email == "")
		{
			document.forms["formbox"]["email"].style.borderColor = "red";
			document.forms["formbox"]["email"].style.backgroundColor = "#E799A3";
			error = true;
		}

		if(contactno == null || contactno == "")
		{
			document.forms["formbox"]["contactno"].style.borderColor = "red";
			document.forms["formbox"]["contactno"].style.backgroundColor = "#E799A3";
			error = true;
		}

		if(error)
		{
		    errorbox.innerHTML="Error sending form. Edit those in red.";
		    errorbox.style.display="block";
			error="";
			
			event.preventDefault();
			return false;
		}
	}
	window.onload = showNotif;

	function showNotif(){
		if(location.search.indexOf("success=true") > -1)
			alert("Student Registered!");
		else if(location.search.indexOf("success=false") > -1)
			alert("System error!");
		else if(location.search.indexOf("error=duplicate") > -1)
			alert("STUDENT ALREADY EXISTS!");
	}
</script>
	
	
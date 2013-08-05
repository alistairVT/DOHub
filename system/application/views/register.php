<html>
<head>
  <title>DOHub: Case Background</title>
</head>

<?php
  include('bootstrapTop.php');
?>

<body>

  <div id="wrap">
<h1>
<div class ="navbar-fixed-top">
    Register Student </div></h1>
  
<form action="" method="post" id="formbox" onsubmit="JavaScript:return check();">

      <div class="maincontainer"> 
    <b>Student ID number</b></br>
    <input class="logininput" type="text" placeholder="ID number" id = "id" name="id" maxlength="75" autofocus/><br/>
    <b>First Name</b></br>
    <input class="logininput" type="text" placeholder="First Name" id = "fname" name="firstname" maxlength="75" autofocus/><br/>
    <b>Last Name</b></br>
    <input class="logininput" type="text" placeholder="Last Name" id = "lname" name="lastname" maxlength="75"/><br/>
    <b>Violation Code</b></br>
    <input class="logininput" type="text" placeholder="Violation Code" id = "violcode" name="violcode" maxlength="75" autofocus/><br/>
    <input id="submit" class="btn btn-success" type="submit" value="Register"  />
  </div>
  </form>

  <div class="clear"></div> </div> 

  <script type="text/javascript">

  function check(event)
  {
    var id = document.forms["formbox"]["id"].value;
    var fname = document.forms["formbox"]["firstname"].value;
    var lname = document.forms["formbox"]["lastname"].value;
    var violcode = document.forms["formbox"]["violcode"].value;
    var errorbox=document.getElementById("errormessage");

    var error = false;

    if(id == null || id == "")
    {
      document.forms["formbox"]["id"].style.borderColor = "red";
      document.forms["formbox"]["id"].style.backgroundColor = "#E799A3";
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

    if(violcode == null || violcode == "")
    {
      document.forms["formbox"]["violcode"].style.borderColor = "red";
      document.forms["formbox"]["violcode"].style.backgroundColor = "#E799A3";
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
  
  }
</div>
<?php
  include('footer.php');
?>
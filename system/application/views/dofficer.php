<html>
<head>
  <title>DOHub: Discipline Officer</title>
</head>

<?php
  include('bootstrapTop.php');
?>

<body>
<div class = "navbar navbar-fixed-top">
<div class = "navbar navbar-inverse">
  <div class = "navbar-inner">
    <div class = "container">
        <a class = "btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>
        </a>

        <a class = "brand" href="#">DOHub</a>
        <div class = "nav-collapse">
          <!-- <ul class = "nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->

        <ul class = "nav pull-right">
          <li><a href"#">Logged in as Discipline Officer</a></li>
        </ul>

      </div>
    </div>
  </div>
</div>
</div>

<!-- SIDE OPTION LIST-->
<br/><br/>
<div class = "leftmenu">
<div class ="span4">
    <div class = "well" style = "padding: 15px 0;">
     <ul class = "nav nav-list">
     <li class = "nav-header">Discipline Officer Options</li>
     <li><a href="#registerstudent">Register Student</a></li>
     <li><a href="#viewstudoffenses">View List of Students with Offenses</a></li>
     <li class = "nav-header">Case Conference</li>
     <li><a href="#prefersched">Enter Preferred Date & Time</a></li>
     <li><a href="#confirmsched">Confirm Case Schedule</a></li>
     <li class = "divider"></li>
     </ul>

    <ul class = "nav nav-list">
     <li><a href="#">Help</a></li>
    </ul>
   </div>

</div>
</div>
<div class="wrap">
  <div class = "rightside">
    <div class = "span8">

<section id ="registerstudent">

 
  <div class="heightextention"></div>
  <h2>Register Student</h2>
  
  <form action="<?php echo base_url() ?>view_controller/registerStudent" method="POST" id="formbox" onsubmit="JavaScript:return check();">
  <div class="maincontainer"> 
    <b>Student ID number</b></br>
    <input class="logininput" type="text" placeholder="ID number" id = "idnumber" name="idnumber" maxlength="8" autofocus/><br/>
    <b>First Name</b></br>
    <input class="logininput" type="text" placeholder="First Name" id = "firstname" name="firstname" maxlength="75" autofocus/><br/>
    <b>Last Name</b></br>
    <input class="logininput" type="text" placeholder="Last Name" id = "lastname" name="lastname" maxlength="75"/><br/>
    <b>Violation Code</b></br>
    <input class="logininput" type="text" placeholder="Violation Code" id = "violcode" name="violcode" maxlength="75" autofocus/><br/>
    <input id="submit" type="submit" value="Register" class = "btn btn-success" />
    </div>
  </form>
  <div class="clear"></div> 
</section>
<br/><br/><br/>


<section id = "viewstudoffenses">
            <div class="heightextention"></div>
  <h2>List of Students with Offenses</h2>
</section>
<br/><br/><br/>

<section id = "prefersched">
            <div class="heightextention"></div>
  <h2>Choose Preferred Date and Time for Case Conference </h2>
</section>

<form>
  
</form>

<section id = "confirmsched">
            <div class="heightextention"></div>
  <h2>Confirm Case Conference Schedule</h2>
</section>
<br/><br/><br/>
</div>
</div></div>


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
  
  
</section>

<?php
  include('templates/footer.php');
?>
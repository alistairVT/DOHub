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
   <img src="<?php echo base_url()?>/assets/img/do_logo.png"/> Register Disciplinary Officer </div></h1>


<form action="" method="post" id="formbox" onsubmit="JavaScript:return check();">
    <div class="maincontainer"> 
    <b>Username</b></br>
    <input type="text" placeholder="Username" id = "username" name="username" maxlength="8" autofocus/><br/>
    <b>First Name</b></br>
    <input type="text" placeholder="First Name" id = "fname" name="firstname" maxlength="75"/><br/>
    <b>Last Name</b></br>
    <input type="text" placeholder="Last Name" id = "lname" name="lastname" maxlength="75"/><br/>
    <b>Email</b></br>
    <input type="text" placeholder="Email" id = "email" name="email" maxlength="75"/><br/>
    <b>Contact Number</b></br>
    <input type="text" placeholder="Contact Number" id = "contactno" name="contactno" maxlength="75"/><br/>

    <input id="submit" class="btn btn-success" type="submit" value="Register"/>
  </div>
</form>

  <div class="clear"></div> </div> 

  <script type="text/javascript">

  function check()
  {
    var inputs = document.getElementsByTagName("input");
    var error = false;

    for(var ctr = 0; ctr < inputs.length; ctr++){
      var value = inputs[ctr].value;
      var type = inputs[ctr].getAttribute("type");
     
      if((/^\s*$/.test(value) == true) && type != "submit" && type != "radio" && type != "button"){
        inputs[ctr].style.borderColor = "red";
        inputs[ctr].style.backgroundColor = "#E799A3";
        inputs[ctr].onfocus = function(){
          this.style.borderColor = "#dce4ec";
          this.style.backgroundColor = "#FFFFFF";
          this.onfocus = null;
        }
        error = true;
        
      }
    }
    
    if(error)
    {
        //errorbox.innerHTML="Error sending form. Edit those in red.";
        //errorbox.style.display="block";
      error=false;
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





  </form>
</div>


<?php
  include('footer.php');
?>
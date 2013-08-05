<html>
<head>
	<title>DOHub: Administrator</title>
</head>

<?php
	include('bootstrapTop.php');
?>

<body>
<div class = "navbar navbar-fixed-top">
  <div class = "navbar navbar-inverse">
    <div class = "navbar-inner">
      <div class = "container" >
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
            <li><a href"#">Logged in as Administrator</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- SIDE OPTION LIST-->
<br/><br/>
      <div class="leftmenu">
        <div class ="span4">
            <div class = "well" style = "padding: 15px 0;">
             <ul class = "nav nav-list">
             <li class = "nav-header">Administrator Options</li>
             <li><a href="#studList">View List of Students with Offenses</a></li>
             <li><a href="#registerDO">Register Discipline Officer</a></li>
             <li><a href="#delDO">Delete Discipline Officer</a></li>
             <li><a href="#viewOffenses">View Offenses</a></li>
             <li class = "divider"></li>
             <li><a href="#">Log-out</a></li>
           </ul>
          </div>
        </div>
      </div>

<table>
  <tr>
    <td width="450"></td>
    <td>
      <div class="rightside">
        <div class="span8">
          <section id="studList">
            <div class="heightextention"></div>
            <h2>List of Students with Offenses</h2>
            <?php
              foreach($students AS $student){
                echo "<br>".$student->idnumber."<br>";
                echo $student->fname."&nbsp;";
                echo $student->mname."&nbsp;";
                echo $student->lname."<br>";
              }
            ?>
          </section><br><br>
          <section id="registerDO">
            <div class="heightextention"></div>
            <h2>Register Discipline Officer</h2>
            <form action="<?php echo base_url() ?>view_controller/registerDO" method="post" id="formbox" onsubmit="JavaScript:return check();">
              <div class="maincontainer"> 
                <b>Username</b></br>
                <input type="text" placeholder="Username" id = "username" name="username" maxlength="8" autofocus/><br/>
                <b>First Name</b></br>
                <input type="text" placeholder="First Name" id = "fname" name="fname" maxlength="75"/><br/>
                <b>Last Name</b></br>
                <input type="text" placeholder="Last Name" id = "lname" name="lname" maxlength="75"/><br/>
                <b>Email</b></br>
                <input type="text" placeholder="Email" id = "email" name="email" maxlength="75"/><br/>
                <b>Contact Number</b></br>
                <input type="text" placeholder="Contact Number" id = "contactno" name="contactno" maxlength="75"/><br/>
                <input id="submit" class="btn btn-success" type="submit" value="Register"/>
              </div>
            </form>
          </section>
          <section id="delDO">
            <div class="heightextention"></div>
            <h2>Delete Discipline Officer</h2>

              <form method = "POST" action = "" id = "formbox">
                <i>Enter DO's username, then click delete</i><br>
                <input type = "text" placeholder="DO's Username" id = "doUsername" name = "doUsername" maxlength ="75"><br>
                <input type = "submit" class = "btn btn-success" id = "delete" value = "Delete DO">
              </form>

          </section>
          <section id="viewOffenses">
            <div class="heightextention"></div>
            <h2>View Offenses</h2>
            <?php
                foreach($offenses AS $offense) {
                  echo $offenses->code;
                  echo $offense->description;
                  echo $offense->core;
                  echo $offense->content;
                  echo $offense->context ;
                }
            ?>
          </section><br><br>
        </div>
      </div>
    </td>
  </tr>
</table>

<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>

<?php
	include('templates/footer.php');
?>

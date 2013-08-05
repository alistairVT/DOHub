<html>
<head>

	  <title>Main Page</title>
</head>

<?php
  include('bootstrapTop.php');
?>

<body>

	 <div id="wrap">
<h1>
<div class ="navbar-fixed-top">
Welcome! </div></h1>
<div class = "maincontainer">
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>

<a href = "registerDO"> Add Disciplinary Officer</a></br>
<a href = ""> Delete Disciplinary Officer</a></br>
<a href = "<?php echo base_url(); ?>view_controller/Summary"> View Summary</a></br>
<a href = "<?php echo base_url(); ?>view_controller/viewstudents"> View Students</a></br>
<a href = "<?php echo base_url(); ?>view_controller/viewoffenses"> View Offenses</a></br>
</div>
<?php
  include('footer.php');
?>
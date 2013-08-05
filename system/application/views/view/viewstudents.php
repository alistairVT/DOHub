<?php
	foreach($students AS $student){
	echo "<br>".$student->idnumber."<br>";
	echo $student->fname."&nbsp;";
	echo $student->mname."&nbsp;";
	echo $student->lname."<br>";
	}
?>
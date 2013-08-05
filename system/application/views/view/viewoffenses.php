List of Offenses
<?php
	foreach($offenses AS $offense){
		echo $offenses->code;
		echo $offense->description;
		echo $offense->core;
		echo $offense->content;
		echo $offense->context ;
	}
?>

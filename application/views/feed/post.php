<?php
	echo $post;
?>


<form action= "<?php echo base_url();  ?>index.php/post" method="post">
	<input type="text" name="text"/>
	<input type="submit"/>
</form>
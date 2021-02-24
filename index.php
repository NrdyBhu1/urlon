<?php
	require 'manager.php';
	require 'content/main_header.php';
	echo "<title>" . $title . "</title>";

   	if(!$db) {
      		echo $db->lastErrorMsg();
	}

	require 'content/form.php';
	
	require 'content/footer.php';
   	$db->close();
?>

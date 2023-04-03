<?php
 
	session_start();
	unset($_SESSION['sid']);   
	session_unset();
	session_destroy();
	echo '<script> location.replace("login.php")</script>'; 	 
	exit();
	
?>
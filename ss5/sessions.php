<?php
	//start the session
	session_start();
	//Define session
	$_SESSION['cart'] = 'product one';
	$_SESSION['login'] = 'admin';
	//call and use session
	echo $_SESSION['cart'];
	//delete session
		//session_destroy();
		session_unset();
		//unset($_SESSION['cart']);
?>
<?php
	session_start();

	$_SESSION['user_id'] = "";

  header("location: signin.php");
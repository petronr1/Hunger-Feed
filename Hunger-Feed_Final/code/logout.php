<!-- 
CSC470
NetFood
Created 04/28/2014

Rocco Petrongolo
Warren Smith
Pedro Furlanetto
Jared Milburn
Chris Borm
-->
<?php
	/**
	* The logout file
	* destroys the session
	* expires the cookie
	* redirects to login.php
	*/
	session_start();
	session_destroy();
	setcookie('email', '', time() - 1*24*60*60);
	setcookie('password', '', time() - 1*24*60*60);
	header("location: home.php");
?>
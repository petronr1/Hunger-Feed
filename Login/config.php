<?php
    //set off all error for security purposes
	error_reporting(E_ALL);

	//define some constants
    define( "DB_DSN", "mysql:host=localhost;dbname=codecalltut" );
    define( "DB_USERNAME", "root" );
    define( "DB_PASSWORD", "" );
	
	//include the classes
	include_once("user.php");
?>
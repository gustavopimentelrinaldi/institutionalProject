<?php
	function db_connect(){
		$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
		return $PDO;
	}

	$server     = "127.0.0.1:3306";
	$username   = "root";
	$password   = "";
	$db         = "quadro";
	
	// create a connection
	$conn = mysqli_connect( $server, $username, $password, $db );


	function make_hash($str){
	return sha1(md5($str));
	}

	function isLoggedIn(){
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
		return false;
	}
	return true;
	}
?>
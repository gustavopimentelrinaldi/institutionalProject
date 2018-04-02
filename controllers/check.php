<?php
	require_once '../models/init.php';
	
	if (!isLoggedIn()){
		header('Location: ../views/index.php?erro=1');
	}
?>
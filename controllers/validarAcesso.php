<?php
	require "bdConnection.php";

	session_start();

	$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

	if(!$login || !$senha){
		header('Location: ../views/index.php?erro=1');
	}

	if($login && $senha){
		header('Location: ../views/quadro.php');
	}
	
?>
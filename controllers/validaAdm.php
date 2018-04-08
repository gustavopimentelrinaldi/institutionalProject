<?php
	require '../models/init.php';
	
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

	$passwordHash = make_hash($senha);
	$PDO = db_connect();

	$sql = "SELECT id, nome, acesso FROM direcao where email = :email AND senha = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':email', $email, PDO::PARAM_STR, 80);
	$stmt->bindParam(':senha', $passwordHash, PDO::PARAM_STR, 40);
	$stmt->execute();

	$adms = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(count($adms) <= 0 ){
		header('Location: ../views/index.php?erro=1');
		exit;
	}

	$adm = $adms[0];

	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $adm['id'];
	$_SESSION['user_name'] = $adm['nome'];
	$_SESSION['tipo_de_acesso'] = $adm['acesso'];
	header('Location: ../views/editaQuadro.php');
?>
<?php
	require '../models/init.php';
	
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

	$passwordHash = sha1($senha);
	$PDO = db_connect();

	$sql = "SELECT id, nome, acesso FROM aluno WHERE email = :email AND senha = :senha";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':email', $email, PDO::PARAM_STR, 80);
	$stmt->bindParam(':senha', $passwordHash, PDO::PARAM_STR, 40);
	$stmt->execute();

	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(count($users) <= 0 ){
		header('Location: ../views/index.php?erro=1');
		exit;
	}

	$user = $users[0];

	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['user_name'] = $user['nome'];
	$_SESSION['tipo_de_acesso'] = $user['acesso'];
	header('Location: ../views/quadro.php');
?>

<script>
	$(document).ready( function(){
		//verificar se os campos de usuário e senha foram devidamente preenchidos
		$('#log').click(function(){
			var campo_vazio = false;
			if($('#email').val() == ''){
				$('#email').css({'border-color': '#A94442'});
				campo_vazio = true;
			} else {
				$('#email').css({'border-color': '#CCC'});
			}
			if($('#senha').val() == ''){
				$('#senha').css({'border-color': '#A94442'});
				campo_vazio = true;
			} else {
				$('#senha').css({'border-color': '#CCC'});
			}
			if(campo_vazio) return false;
		});
	});					
</script>
<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login ~ Quadro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="index">
	<nav class="navbar navbar-findcond">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar glyphicon glyphicon-option-vertical"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="backoffice.php">Administração</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="main">
		<div class="alert alert-warning alert-dismissible container" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Atenção!</strong> Você está na tela de login do Aluno!
		</div>
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<br>
				<form method="post" action="../controllers/usuario_controller.php" class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
					<input type="email" id="email" class="form-control" placeholder="Email" name="email">
					<input type="password" id="senha" class="form-control" placeholder="Senha" name="senha">
					<button id="log" class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="entrar">Entrar</button>
					<?php
						if($erro == 1){
							echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
						}
					?>
				</form><!-- /form -->
			</div><!-- /card-container -->
		</div><!-- /container -->
	</section>

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-3.1.0.min.js"></script>
	<script>
		$('.close').click(function(){
			$('.alert').fadeOut();
		});
	</script>
</body>
</html>
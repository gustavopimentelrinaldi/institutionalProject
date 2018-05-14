<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Backoffice ~ Quadro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body id="backoffice">
	<nav class="navbar navbar-findcond navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Aluno</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="main">
		<div class="alert alert-danger alert-dismissible container" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Atenção!</strong> Você está na tela de login da Direção!
		</div>
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<br>
				<form method="post" action="../controllers/backoffice_controller.php" class="form-signin">
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
	
	<script>
		$('.close').click(function(){
			$('.alert').fadeOut();
		});
	</script>
</body>
</html>
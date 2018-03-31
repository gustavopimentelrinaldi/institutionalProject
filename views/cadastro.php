<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrar ~ Quadro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
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
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> Acesso <span class="badge">1</span></a>
					</li>
					<li class="active"><a href="#">Nome[Usuario]</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="register">
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<form class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
						<input type="text" id="inputCurso" class="form-control" placeholder="Curso" required/>
						<input type="text" id="inputSemestre" class="form-control" placeholder="Semestre" required/>
						<input type="text" id="inputDisciplina" class="form-control" placeholder="Disciplina" required/>
						<input type="text" id="inputTurno" class="form-control" placeholder="Turno" required/>
						<input type="text" id="inputProfessor" class="form-control" placeholder="Professor" required/>
					<div id="remember" class="checkbox">
						<label>
								<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
				</form><!-- /form -->
				<a href="#" class="forgot-password">
						Forgot the password?
				</a>
			</div><!-- /card-container -->
		</div><!-- /container -->
	</section>
</body>
</html>
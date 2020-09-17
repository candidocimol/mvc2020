<?php if ( ! defined('PATH')) exit; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $this->title; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	
</head>
<body>
	<header class="container">
		<div id="logo"><img src="http://www2.cimol.g12.br/public/temas/cimol/images/logo_cursos/logo_cimol.jpg" style="height:100px"/></div>
		<div></div>
	</header>
	<hr/>
	<main class="container">
		<form method="post" action="<?php echo HOME_URI ?>/user/autenticar">
			<div class="form-group">
				<label for="exampleInputEmail1">Endereço de email</label>
				<input type="email" name="user[email]"class="form-control" id="user-email" aria-describedby="emailHelp" placeholder="Seu email">
				<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" name="user[password]"class="form-control" id="user-password" placeholder="Senha">
			</div>
			
			<button type="submit" class="btn btn-primary btn-block">Enviar</button>
		</form>

	</main>
</body>
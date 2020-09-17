<?php if ( ! defined('PATH')) exit; ?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="<?php echo HOME_URI;?>/views/js/script.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/css/style.css">


	<title><?php echo $this->title; ?></title>
</head>
<body>
	<header>
		<div id="h-logo"><img src="<?php echo HOME_URI ?>/views/images/logo.png" style="height:75px"/></div>
		<div id='h-center'></div>
		<div id='h-user'>
			
			<?php 
			if(isset($_SESSION['user'])){

				echo "<a href='#' id='user-show'><i class='fas fa-user-check' style='font-size:24px'></i></a>";
				echo "<div id='user-info' class='hide' >
						<ul>
						<li>"
					.$_SESSION['user']['nome'].
						"</li>
						<li>
					<a href='".HOME_URI."/user/logout'><i class=' fas fa-sign-out-alt' style='font-size:24px'></i></a>
					</li>
				</div>";
				}else{
				echo "<a href='".HOME_URI."/user/login'><i class=' fas fa-sign-in-alt' style='font-size:24px'></i></a>";
			}

			
			?>
		</div>
	</header>
<?php
	if(isset($_SESSION['msg'])){
		foreach($_SESSION['msg'] AS $msg){
			echo "<div  class='msg alert alert-".$msg['class']."' role='alert'>"
			.$msg['msg'].
			"
		  </div>";
		}
		unset($_SESSION['msg']);
		echo "<script>$('.msg').hide(3000);</script>";
	}
?>

<div class="main-page">
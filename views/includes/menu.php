<?php if ( ! defined('PATH')) exit; ?>

<nav class="menu clearfix">
	<ul>
		<li><a href="<?php echo HOME_URI;?>">Início</a></li>
		<li><a href="<?php echo HOME_URI;?>/urlAmigavel/">URL Amigável</a></li>
		<li><a href="<?php echo HOME_URI;?>/contato/">Contato</a></li>
		<?php 
		$user=$this->getUser(); 
        if ($user) {
            if ($user['nivel']=='admin')
                 ?>
				<li><a href="<?php echo HOME_URI; ?>/user/">Usuário</a></li>
		<?php
        } ?>	
		<li><a href="<?php echo HOME_URI;?>/noticias/">Notícias</a></li>
		<li><a href="<?php echo HOME_URI;?>/aluno/">Alunos</a></li>
	</ul>
</nav>
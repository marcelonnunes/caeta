<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<title>
            <?php  
            	if(isset($title)){
            		echo h($title);
            	}else{
            		echo h($this->fetch('title'));
            	}
            ?>
		</title>
		<?= $this->Html->meta('icon') ?>
		<!-- Inclui arquivos externos e scripts aqui. (Veja HTML helper para mais informações.) -->
		<?php
			echo $this->Html->script('jquery-3.2.1.min');
			echo $this->Html->css('pnotify.custom.min');
			echo $this->Html->css('animate');
	        echo $this->Html->css('bootstrap/bootstrap.min');
	        echo $this->Html->css('font-awesome/font-awesome.min');
	        echo $this->Html->css('ioicons/ionicons.min');
	        echo $this->Html->css('AdminLTE/AdminLTE.min');
	        echo $this->Html->css('AdminLTE/skins/skin-blue');
	        echo $this->Html->css('iCheck/square/blue');
	        echo $this->Html->css('bootstrap-social');
	        
	        echo $this->Html->script('bootstrap/bootstrap');
	        echo $this->Html->script('AdminLTE/app');
	        echo $this->Html->script('pnotify.custom.min');
	        echo $this->Html->script('iCheck/icheck.min');
        
			echo $this->fetch ( 'meta' );
			echo $this->fetch ( 'css' );
			echo $this->fetch ( 'script' );
		?>
	</head>
	<body>
		<!-- Se você quiser algum tipo de menu para mostrar no topo de todas as suas *views*, inclua isso aqui -->
		<div id="header">
			<div id="menu">
				<div id="div_message" class="animated">
					<?= $this->Flash->render() ?>
				</div>
			</div>
		</div>
		
		<!-- Aqui é onde eu quero que minhas views sejam exibidas -->
		<?= $this->fetch('content') ?>
		
		<!-- Adicione um rodapé para cada página exibida -->
		<div id="footer"></div>
	
	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Short.ly - Acortador de enlaces</title>
	<?php
	echo $this->Html->css('cake.generic');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>sh&nbsp;&nbsp;rt.ly</h1>
			<!-- <img id="headscissors" src="icons/generalicons/headscissors.svg" alt="scissors"/> -->
			<?php echo $this->Html->image('icons/generalicons/headscissors.svg', array('alt' => 'Scissors on header', 'id' => 'headscissors')); ?>
		</div>
		<div id="body">
			<div id="shortener">
				<?php
					echo "<p>";
					echo $this->Form->create("short");
					echo $this->Form->input(
						'add', array('type' => 'text', 'value' => 'Escribe tu enlace aquí', 
							'class' => 'shortener', 'label' => false, 'div' => false)
						);
					echo $this->Form->submit('Short it!', array('label' => false, 'div' => false, 'value' => 'ShortIt!', 'class' => 'submit', 'inline' => 'true', 'controller' => 'links', 'action' => 'add'));
					echo "</p>";
				?>
			</div>
			<div id="signmenu">		
				<div id="login">
			    	<?php echo $this->Html->link($this->Html->image('icons/loginicons/login.svg', array('alt' => 'Login')), array('controller' => 'users', 'action' => 'login'), array('escape' => false)); ?>
			    </div>
			    <div id="registrarse">
			    	<?php echo $this->Html->link($this->Html->image("icons/loginicons/register.svg", array("alt" => "registrarse")), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?>
			    </div> 
			</div>	
			<div id="contents">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
	        <div id="share">
	            <p>
	            <?php
	            echo $this->Html->image('icons/shareicons/facebook.svg', array('alt' => 'Share on facebook!', 'class' => 'shareimage'));
	            echo $this->Html->image('icons/shareicons/twitter.svg', array('alt' => 'Share on twitter!', 'class' => 'shareimage'));
	            echo "<br />";
	            ?>
	            síguenos</p>
	        </div>
	        <div id="footer">
	        	<?php echo $this->Html->image('icons/generalicons/footscissors.svg', array('alt' => 'Footer scissors', 'id' => 'footscissors')) ?>
	            <p>ayuda - contacto - desarrolladores - about us - facebook - twitter</p>
	            <div id="titlefooter">
	            	<?php echo $this->Html->image('icons/generalicons/footimage.svg', array('alt' => 'Footer image', 'id' => 'footimage')) ?>
	            </div>
	        </div>
		</div>
	</div>
</body>
</html>



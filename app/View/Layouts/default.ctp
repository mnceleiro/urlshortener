<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Short.ly - Acortador de enlaces</title>
	<?php
	echo $this->Html->css('cake.generic');
	echo $this->Html->css('index.css');
	// echo $this->fetch('meta');
	// echo $this->fetch('css');
	// echo $this->fetch('script');
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
			<!--	<form id="urlshortener" action="/">
				    <p>
				    	<input type="text" name="largeurl" value="Introduce tu link aqui..." class="shortener"></input>
					    <input type="submit" name="Submit" value="short it!" class="submit"></input>
					</p> 
				</form>
			-->
				<?php
					echo "<p>";
					echo $this->Form->create("short");
					echo $this->Form->input(
						'', array('type' => 'text', 'value' => 'Escribe tu enlace aquí', 
							'class' => 'shortener', 'label' => false, 'div'=>false)
						);
					echo $this->Form->submit('Short it!', array('label' => false, 'div' => false, 'value' => 'ShortIt!', 'class' => 'submit', 'inline' => 'true'));
					echo "</p>";
				?>
			</div>
			<div id="signmenu">
				<div id="login">
			    	<?php echo $this->Html->image('icons/loginicons/login.svg', array('alt' => 'Login')) ?>
			    </div>
			    <div id="registrarse">
			    	<?php echo $this->Html->image('icons/loginicons/register.svg', array('alt' => 'registrarse')) ?>
			    </div>
			</div>	
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
	        <div id="share">
	            <!-- <p><img class="shareimage" src="icons/shareicons/facebook.svg" alt="share on facebook"/> -->
	            <!-- <img class="shareimage" src="icons/shareicons/twitter.svg" alt="share on twitter"/><br /> -->
	            <p>
	            <?php
	            echo $this->Html->image('icons/shareicons/facebook.svg', array('alt' => 'Share on facebook!', 'class' => 'shareimage'));
	            echo $this->Html->image('icons/shareicons/twitter.svg', array('alt' => 'Share on twitter!', 'class' => 'shareimage'));
	            echo "<br />";
	            ?>
	            síguenos</p>
	        </div>
	        <div id="footer">
	        	<!-- <img id="footscissors" src="icons/generalicons/footscissors.svg" alt="footscissors" /> -->
	        	
	        	<?php echo $this->Html->image('icons/generalicons/footscissors.svg', array('alt' => 'Footer scissors', 'id' => 'footscissors')) ?>
	            <p>ayuda - contacto - desarrolladores - about us - facebook - twitter</p>
	            <div id="titlefooter">
	            	<!-- <img id="footimage" src="icons/generalicons/footimage.svg" alt="scissors" /> -->
	            	<?php echo $this->Html->image('icons/generalicons/footimage.svg', array('alt' => 'Footer image', 'id' => 'footimage')) ?>
	            </div>
	        </div>
		</div>
	</div>
</body>
</html>



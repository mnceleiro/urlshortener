<?php
echo $this->Html->css('login/identifiedcommon.css');
echo $this->Html->css('login/history.css');
?>

<div id="history">
<ul id="linkhistory">
  <?php foreach ($links as $link): ?>
  <li><?php echo $this->Html->link($link['Link']['url'], true); ?></li>
<!--   <li>www.peixe.com/peixe</li>
  <li>www.evrevare.es</li>
  <li>www.tsw.net/tsw</li>
  <li>www.kjdkjdf.es/djs</li> -->
  <?php endforeach; ?>
</ul>
</div>
<div id="goto">
	<input type="submit" name="Submit" value="Tiempo" class="screenselect"></input>
	<input type="submit" name="Submit" value="Fuente" class="screenselect"></input>
	<input type="submit" name="Submit" value="Enlaces" class="screenselect"></input>
</div>
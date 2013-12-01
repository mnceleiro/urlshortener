<?php echo $this->Html->css('index.css'); ?>

<div class="linkicon">
    <?php echo $this->Html->image(
    	'icons/linkicons/shorticon.svg', array(
    		'alt' => 'Short your urls!',
    		'class' => 'linkimage'
		)); ?>
    <p>Acorta tus enlaces</p>
</div>
<div class="linkicon">
    <?php echo $this->Html->image(
    	'icons/linkicons/stadisticsicon.svg', array(
    		'alt' => 'Look your statistics!',
    		"class" => 'linkimage'
		)); ?>
    <p>Visualiza estadísticas<br />
    de tus enlaces</p>
</div>
<div class="linkicon">
    <?php echo $this->Html->image(
    	'icons/linkicons/historyicon.svg', array(
    		'alt' => 'Show your history of links!',
			'class' => 'linkimage'
		)); ?>
    <p>Visualiza el historial<br />
    de tus enlaces</p>
</div>
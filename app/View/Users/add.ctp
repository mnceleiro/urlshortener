<?php echo $this->Html->css('users.css'); ?>
<div class="users">
	<?php echo $this->Form->create('User', array('label' => true)); ?>
    <fieldset>
        <legend><?php echo __('Registro'); ?></legend>
        <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('surname');
        echo $this->Form->input('password', array('type' => 'password'));
       	echo $this->Form->end('Submit');
		?>
    </fieldset>
</div>
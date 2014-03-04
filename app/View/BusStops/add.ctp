<div class="busStops form">
<?php echo $this->Form->create('BusStop'); ?>
	<fieldset>
		<legend><?php echo __('Add Bus Stop'); ?></legend>
	<?php
		echo $this->Form->input('city');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bus Stops'), array('action' => 'index')); ?></li>
	</ul>
</div>

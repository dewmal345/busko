<div class="intermediates form">
<?php echo $this->Form->create('Intermediate'); ?>
	<fieldset>
		<legend><?php echo __('Add Intermediate'); ?></legend>
	<?php
		echo $this->Form->input('route_id');
		echo $this->Form->input('station_number');
		echo $this->Form->input('duration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Intermediates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

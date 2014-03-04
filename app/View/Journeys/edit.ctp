<div class="journeys form">
<?php echo $this->Form->create('Journey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Journey'); ?></legend>
	<?php
		echo $this->Form->input('lis_number');
		echo $this->Form->input('round_number');
		echo $this->Form->input('date');
		echo $this->Form->input('route_id');
		echo $this->Form->input('start_stop');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Journey.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Journey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

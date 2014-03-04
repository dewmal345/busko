<div class="routes form">
<?php echo $this->Form->create('Route'); ?>
	<fieldset>
		<legend><?php echo __('Edit Route'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('start_stop');
		echo $this->Form->input('end_stop');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Route.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Route.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Intermediates'), array('controller' => 'intermediates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intermediate'), array('controller' => 'intermediates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="drives form">
<?php echo $this->Form->create('Drive'); ?>
	<fieldset>
		<legend><?php echo __('Add Drive'); ?></legend>
	<?php
		echo $this->Form->input('lis_number');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('assistant_id');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drives'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assistants'), array('controller' => 'assistants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assistant'), array('controller' => 'assistants', 'action' => 'add')); ?> </li>
	</ul>
</div>

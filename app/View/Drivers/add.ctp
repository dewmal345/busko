<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><?php echo __('Add Driver'); ?></legend>
	<?php
		echo $this->Form->input('driver_licence_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drives'), array('controller' => 'drives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drive'), array('controller' => 'drives', 'action' => 'add')); ?> </li>
	</ul>
</div>

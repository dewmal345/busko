<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><?php echo __('Edit Driver'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('driver_licence_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Driver.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Driver.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drives'), array('controller' => 'drives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drive'), array('controller' => 'drives', 'action' => 'add')); ?> </li>
	</ul>
</div>

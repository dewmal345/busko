<div class="assistants form">
<?php echo $this->Form->create('Assistant'); ?>
	<fieldset>
		<legend><?php echo __('Add Assistant'); ?></legend>
	<?php
		echo $this->Form->input('machine_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assistants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drives'), array('controller' => 'drives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drive'), array('controller' => 'drives', 'action' => 'add')); ?> </li>
	</ul>
</div>

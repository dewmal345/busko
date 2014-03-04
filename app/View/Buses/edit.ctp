<div class="buses form">
<?php echo $this->Form->create('Bus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bus'); ?></legend>
	<?php
		echo $this->Form->input('lis_number');
		echo $this->Form->input('capacity');
		echo $this->Form->input('model');
		echo $this->Form->input('route');
		echo $this->Form->input('conditions');
		echo $this->Form->input('branch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="repairs form">
<?php echo $this->Form->create('Repair'); ?>
	<fieldset>
		<legend><?php echo __('Edit Repair'); ?></legend>
	<?php
		echo $this->Form->input('lis_number');
		echo $this->Form->input('start_date');
		echo $this->Form->input('description');
		echo $this->Form->input('amount');
		echo $this->Form->input('repair_state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Repair.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Repair.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('action' => 'index')); ?></li>
	</ul>
</div>

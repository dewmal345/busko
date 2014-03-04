<div class="employeePhones form">
<?php echo $this->Form->create('EmployeePhone'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee Phone'); ?></legend>
	<?php
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employee Phones'), array('action' => 'index')); ?></li>
	</ul>
</div>

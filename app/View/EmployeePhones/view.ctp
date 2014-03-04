<div class="employeePhones view">
<h2><?php echo __('Employee Phone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeePhone['EmployeePhone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($employeePhone['EmployeePhone']['phone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Phone'), array('action' => 'edit', $employeePhone['EmployeePhone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Phone'), array('action' => 'delete', $employeePhone['EmployeePhone']['id']), null, __('Are you sure you want to delete # %s?', $employeePhone['EmployeePhone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Phones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Phone'), array('action' => 'add')); ?> </li>
	</ul>
</div>

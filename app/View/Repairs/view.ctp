<div class="repairs view">
<h2><?php echo __('Repair'); ?></h2>
	<dl>
		<dt><?php echo __('Lis Number'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['lis_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repair State'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['repair_state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repair'), array('action' => 'edit', $repair['Repair']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Repair'), array('action' => 'delete', $repair['Repair']['id']), null, __('Are you sure you want to delete # %s?', $repair['Repair']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="operators view">
<h2><?php echo __('Operator'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operator'), array('action' => 'edit', $operator['Operator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operator'), array('action' => 'delete', $operator['Operator']['id']), null, __('Are you sure you want to delete # %s?', $operator['Operator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operator'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="buses view">
<h2><?php echo __('Bus'); ?></h2>
	<dl>
		<dt><?php echo __('Lis Number'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['lis_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['route']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conditions'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['conditions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bus['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $bus['Branch']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bus'), array('action' => 'edit', $bus['Bus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bus'), array('action' => 'delete', $bus['Bus']['id']), null, __('Are you sure you want to delete # %s?', $bus['Bus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>

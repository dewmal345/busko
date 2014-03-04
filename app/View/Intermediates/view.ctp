<div class="intermediates view">
<h2><?php echo __('Intermediate'); ?></h2>
	<dl>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo $this->Html->link($intermediate['Route']['id'], array('controller' => 'routes', 'action' => 'view', $intermediate['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($intermediate['Intermediate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station Number'); ?></dt>
		<dd>
			<?php echo h($intermediate['Intermediate']['station_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($intermediate['Intermediate']['duration']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Intermediate'), array('action' => 'edit', $intermediate['Intermediate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Intermediate'), array('action' => 'delete', $intermediate['Intermediate']['id']), null, __('Are you sure you want to delete # %s?', $intermediate['Intermediate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Intermediates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intermediate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

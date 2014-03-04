<div class="busStops view">
<h2><?php echo __('Bus Stop'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($busStop['BusStop']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($busStop['BusStop']['city']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bus Stop'), array('action' => 'edit', $busStop['BusStop']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bus Stop'), array('action' => 'delete', $busStop['BusStop']['id']), null, __('Are you sure you want to delete # %s?', $busStop['BusStop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bus Stops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus Stop'), array('action' => 'add')); ?> </li>
	</ul>
</div>

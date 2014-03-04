<div class="journeys index">
	<h2><?php echo __('Journeys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lis_number'); ?></th>
			<th><?php echo $this->Paginator->sort('round_number'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('route_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_stop'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($journeys as $journey): ?>
	<tr>
		<td><?php echo h($journey['Journey']['lis_number']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['round_number']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journey['Route']['id'], array('controller' => 'routes', 'action' => 'view', $journey['Route']['id'])); ?>
		</td>
		<td><?php echo h($journey['Journey']['start_stop']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['end_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $journey['Journey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $journey['Journey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="intermediates index">
	<h2><?php echo __('Intermediates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('route_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('station_number'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($intermediates as $intermediate): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($intermediate['Route']['id'], array('controller' => 'routes', 'action' => 'view', $intermediate['Route']['id'])); ?>
		</td>
		<td><?php echo h($intermediate['Intermediate']['id']); ?>&nbsp;</td>
		<td><?php echo h($intermediate['Intermediate']['station_number']); ?>&nbsp;</td>
		<td><?php echo h($intermediate['Intermediate']['duration']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $intermediate['Intermediate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $intermediate['Intermediate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $intermediate['Intermediate']['id']), null, __('Are you sure you want to delete # %s?', $intermediate['Intermediate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Intermediate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

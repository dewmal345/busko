<div class="buses index">
	<h2><?php echo __('Buses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lis_number'); ?></th>
			<th><?php echo $this->Paginator->sort('capacity'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('route'); ?></th>
			<th><?php echo $this->Paginator->sort('conditions'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($buses as $bus): ?>
	<tr>
		<td><?php echo h($bus['Bus']['lis_number']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['capacity']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['model']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['route']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['conditions']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bus['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $bus['Branch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bus['Bus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bus['Bus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bus['Bus']['id']), null, __('Are you sure you want to delete # %s?', $bus['Bus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>

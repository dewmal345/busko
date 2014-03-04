<div class="drives index">
	<h2><?php echo __('Drives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lis_number'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assistant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($drives as $drive): ?>
	<tr>
		<td><?php echo h($drive['Drive']['lis_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($drive['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $drive['Driver']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($drive['Assistant']['id'], array('controller' => 'assistants', 'action' => 'view', $drive['Assistant']['id'])); ?>
		</td>
		<td><?php echo h($drive['Drive']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $drive['Drive']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $drive['Drive']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $drive['Drive']['id']), null, __('Are you sure you want to delete # %s?', $drive['Drive']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Drive'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assistants'), array('controller' => 'assistants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assistant'), array('controller' => 'assistants', 'action' => 'add')); ?> </li>
	</ul>
</div>

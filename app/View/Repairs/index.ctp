<div class="repairs index">
	<h2><?php echo __('Repairs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lis_number'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('repair_state'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($repairs as $repair): ?>
	<tr>
		<td><?php echo h($repair['Repair']['lis_number']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['description']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['amount']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['repair_state']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $repair['Repair']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $repair['Repair']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $repair['Repair']['id']), null, __('Are you sure you want to delete # %s?', $repair['Repair']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Repair'), array('action' => 'add')); ?></li>
	</ul>
</div>

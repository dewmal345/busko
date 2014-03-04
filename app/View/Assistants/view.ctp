<div class="assistants view">
<h2><?php echo __('Assistant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Number'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['machine_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assistant'), array('action' => 'edit', $assistant['Assistant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assistant'), array('action' => 'delete', $assistant['Assistant']['id']), null, __('Are you sure you want to delete # %s?', $assistant['Assistant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assistants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assistant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drives'), array('controller' => 'drives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drive'), array('controller' => 'drives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Drives'); ?></h3>
	<?php if (!empty($assistant['Drive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Lis Number'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Assistant Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assistant['Drive'] as $drive): ?>
		<tr>
			<td><?php echo $drive['lis_number']; ?></td>
			<td><?php echo $drive['driver_id']; ?></td>
			<td><?php echo $drive['assistant_id']; ?></td>
			<td><?php echo $drive['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'drives', 'action' => 'view', $drive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'drives', 'action' => 'edit', $drive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'drives', 'action' => 'delete', $drive['id']), null, __('Are you sure you want to delete # %s?', $drive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Drive'), array('controller' => 'drives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

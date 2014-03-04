<div class="drives view">
<h2><?php echo __('Drive'); ?></h2>
	<dl>
		<dt><?php echo __('Lis Number'); ?></dt>
		<dd>
			<?php echo h($drive['Drive']['lis_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($drive['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $drive['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assistant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($drive['Assistant']['id'], array('controller' => 'assistants', 'action' => 'view', $drive['Assistant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($drive['Drive']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Drive'), array('action' => 'edit', $drive['Drive']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Drive'), array('action' => 'delete', $drive['Drive']['id']), null, __('Are you sure you want to delete # %s?', $drive['Drive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drive'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assistants'), array('controller' => 'assistants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assistant'), array('controller' => 'assistants', 'action' => 'add')); ?> </li>
	</ul>
</div>

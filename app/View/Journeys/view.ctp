<div class="journeys view">
<h2><?php echo __('Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Lis Number'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['lis_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Round Number'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['round_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Route'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Route']['id'], array('controller' => 'routes', 'action' => 'view', $journey['Route']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Stop'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['start_stop']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['end_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journey'), array('action' => 'edit', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journey'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>

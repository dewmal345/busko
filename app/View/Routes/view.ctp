<div class="routes view">
<h2><?php echo __('Route'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($route['Route']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Stop'); ?></dt>
		<dd>
			<?php echo h($route['Route']['start_stop']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Stop'); ?></dt>
		<dd>
			<?php echo h($route['Route']['end_stop']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Route'), array('action' => 'edit', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Route'), array('action' => 'delete', $route['Route']['id']), null, __('Are you sure you want to delete # %s?', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Intermediates'), array('controller' => 'intermediates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intermediate'), array('controller' => 'intermediates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Intermediates'); ?></h3>
	<?php if (!empty($route['Intermediate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Station Number'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($route['Intermediate'] as $intermediate): ?>
		<tr>
			<td><?php echo $intermediate['route_id']; ?></td>
			<td><?php echo $intermediate['id']; ?></td>
			<td><?php echo $intermediate['station_number']; ?></td>
			<td><?php echo $intermediate['duration']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'intermediates', 'action' => 'view', $intermediate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'intermediates', 'action' => 'edit', $intermediate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'intermediates', 'action' => 'delete', $intermediate['id']), null, __('Are you sure you want to delete # %s?', $intermediate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Intermediate'), array('controller' => 'intermediates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($route['Journey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Lis Number'); ?></th>
		<th><?php echo __('Round Number'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Start Stop'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($route['Journey'] as $journey): ?>
		<tr>
			<td><?php echo $journey['lis_number']; ?></td>
			<td><?php echo $journey['round_number']; ?></td>
			<td><?php echo $journey['date']; ?></td>
			<td><?php echo $journey['route_id']; ?></td>
			<td><?php echo $journey['start_stop']; ?></td>
			<td><?php echo $journey['start_time']; ?></td>
			<td><?php echo $journey['end_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'view', $journey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journeys', 'action' => 'edit', $journey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journeys', 'action' => 'delete', $journey['id']), null, __('Are you sure you want to delete # %s?', $journey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

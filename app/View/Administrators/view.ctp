<div class="administrators view">
<h2><?php echo __('Administrator'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrator'), array('action' => 'edit', $administrator['Administrator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrator'), array('action' => 'delete', $administrator['Administrator']['id']), null, __('Are you sure you want to delete # %s?', $administrator['Administrator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="records view">
<h2><?php echo __('Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($record['Record']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Event']['description'], array('controller' => 'events', 'action' => 'view', $record['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bird'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Bird']['name_'], array('controller' => 'birds', 'action' => 'view', $record['Bird']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time '); ?></dt>
		<dd>
			<?php echo h($record['Record']['time_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location '); ?></dt>
		<dd>
			<?php echo h($record['Record']['location_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($record['Record']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Record'), array('action' => 'edit', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Record'), array('action' => 'delete', $record['Record']['id']), array(), __('Are you sure you want to delete # %s?', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Birds'), array('controller' => 'birds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bird'), array('controller' => 'birds', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="records index">
	<h2><?php echo __('Records'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bird_id'); ?></th>
			<th><?php echo $this->Paginator->sort('time_'); ?></th>
			<th><?php echo $this->Paginator->sort('location_'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($records as $record): ?>
	<tr>
		<td><?php echo h($record['Record']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['Event']['description'], array('controller' => 'events', 'action' => 'view', $record['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['Bird']['name_'], array('controller' => 'birds', 'action' => 'view', $record['Bird']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['time_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['location_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $record['Record']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $record['Record']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $record['Record']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $record['Record']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Birds'), array('controller' => 'birds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bird'), array('controller' => 'birds', 'action' => 'add')); ?> </li>
	</ul>
</div>

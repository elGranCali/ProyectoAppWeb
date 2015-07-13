<div class="birds view">
<h2><?php echo __('Bird'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ecology'); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['ecology']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family '); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['family_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name '); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['name_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribution'); ?></dt>
		<dd>
			<?php echo h($bird['Bird']['distribution']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bird'), array('action' => 'edit', $bird['Bird']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bird'), array('action' => 'delete', $bird['Bird']['id']), array(), __('Are you sure you want to delete # %s?', $bird['Bird']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Birds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bird'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Records'); ?></h3>
	<?php if (!empty($bird['Record'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Bird Id'); ?></th>
		<th><?php echo __('Time '); ?></th>
		<th><?php echo __('Location '); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bird['Record'] as $record): ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['event_id']; ?></td>
			<td><?php echo $record['bird_id']; ?></td>
			<td><?php echo $record['time_']; ?></td>
			<td><?php echo $record['location_']; ?></td>
			<td><?php echo $record['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'records', 'action' => 'view', $record['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'records', 'action' => 'edit', $record['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'records', 'action' => 'delete', $record['id']), array(), __('Are you sure you want to delete # %s?', $record['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

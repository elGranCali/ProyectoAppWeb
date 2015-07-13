<div class="records form">
<?php echo $this->Form->create('Record'); ?>
	<fieldset>
		<legend><?php echo __('Add Record'); ?></legend>
	<?php
		echo $this->Form->input('event_id');
		echo $this->Form->input('bird_id');
		echo $this->Form->input('time_');
		echo $this->Form->input('location_');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Birds'), array('controller' => 'birds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bird'), array('controller' => 'birds', 'action' => 'add')); ?> </li>
	</ul>
</div>

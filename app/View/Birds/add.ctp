<div class="birds form">
<?php echo $this->Form->create('Bird'); ?>
	<fieldset>
		<legend><?php echo __('Add Bird'); ?></legend>
	<?php
		echo $this->Form->input('ecology');
		echo $this->Form->input('family_');
		echo $this->Form->input('name_');
		echo $this->Form->input('url');
		echo $this->Form->input('distribution');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Birds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>

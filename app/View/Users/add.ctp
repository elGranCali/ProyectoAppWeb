<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend> Registrar usuario </legend>
	<?php
		echo $this->Form->input('name_');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('telephone');
		echo $this->Form->input('degree');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


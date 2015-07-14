<div class="categories form">
<br>
<br>
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
	<br>
	<br>
		<legend> Nueva Categoría </legend>
	<?php
		echo $this->Form->input('description', array('label' => array ('text' => 'Descripción:  ', 'class' => 'label-important')));
	?>
	</fieldset>
<?php echo $this->Form->end('Guardar'); ?>
</div>


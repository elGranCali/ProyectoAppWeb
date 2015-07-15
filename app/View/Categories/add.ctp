<div class="categories form">
<br>
<br>
<?php echo $this->Form->create('Category'); ?>
	<fieldset >
	<br>
	<br>
		<legend> Nueva Categoría </legend>
		<div class= "form-group col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5">
			<?php
				echo $this->Form->input('description', array('label' => array ('text' => 'Nombre categoría :  ', 'class' => 'label-important'), 'class' => 'form-control' ));
			?>
			<br>
			<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
		</div>
	<br>
	</fieldset>
</div>


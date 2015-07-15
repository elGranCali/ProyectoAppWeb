<div class="categories form">
<br>
<br>
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<?php echo $this->Html->link('Consultar Categorías', array('action' => 'index'), array ( 'class' => 'btn btn-info')); ?>
		<br>
		<br>
		<legend>Editar Categoría </legend>
			<div class= "form-group col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5">
				<?php echo $this->Form->input('id'); ?>
				<?php echo $this->Form->input('description', array('label' => array ('text' => 'Nombre categoría :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				<br>
				<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
			</div>
	</fieldset>
</div>


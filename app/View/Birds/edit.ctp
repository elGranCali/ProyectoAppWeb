<div class="birds form">
<?php echo $this->Form->create('Bird'); ?>
	<br>
	<br>
	<fieldset>
		<?php echo $this->Html->link('Consultar Aves', array('action' => 'index'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
		<br>
		<br>
		<legend> Modificar información del Ave </legend>
		<div class= "form-group">	
			<?php echo $this->Form->input('id');?>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6">
					<?php echo $this->Form->input('name_' ,  array('label' => array ('text' => 'Nombre :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6">
					<?php echo $this->Form->input('family_' , array('label' => array ('text' => 'Familia :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				</div>
			</div>
			<?php echo $this->Form->input('ecology' , array('label' => array ('text' => 'Ecología :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php echo $this->Form->input('distribution' , array('label' => array ('text' => 'Distribución :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<br>
			<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
	</fieldset>	
</div>
</div>

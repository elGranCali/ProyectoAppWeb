<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<br>
	<br>
	<fieldset>
		<?php echo $this->Html->link('Consultar Eventos', array('action' => 'index'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
		<br>
		<br>
	<legend> Modificar Evento </legend>
		<div class= "form-group col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5">	
			<?php echo $this->Form->input('id'); ?>		
			<?php	echo $this->Form->input('description' , array('label' => array ('text' => 'Nombre :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php	echo $this->Form->input('year_' , 		array('label' => array ('text' => 'Año :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php	echo $this->Form->input('organization', array('label' => array ('text' => 'Organización :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<br>
			<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
		</div>	
	</fieldset>
</div>


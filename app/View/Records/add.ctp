<div class="records form">
<?php echo $this->Form->create('Record'); ?>
	<br>
	<br>
	<fieldset>
		<?php echo $this->Html->link('Consultar Registros', array('action' => 'index'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
		<br>
		<br>
		<legend> Nuevo Registro </legend>
			<div class= "form-group">	
				<div class="row">
					<div class="col-md-6">
						<?php 	echo $this->Form->input('bird_id' , array('label' => array ('text' => 'Ave :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
					</div>
					<div class="col-md-6">
						<?php 	echo $this->Form->input('event_id' , array('label' => array ('text' => 'Evento :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
					</div>
				</div>
				<br>
				<?php 	echo $this->Form->input('location_' , array('label' => array ('text' => 'Localización :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				<br>
				<?php 	echo $this->Form->input('description' , array('label' => array ('text' => 'Descripción :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?> 		
			</div>
			<br>
			<div class="form-control" >
				<?php 	echo $this->Form->input('time_' , array('label' => array ('text' => 'Hora del registro :  ', 'class' => 'label-important'))); ?>
				<br>
				<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
			</div>
	</fieldset>
	<br>
	<br>
</div>
